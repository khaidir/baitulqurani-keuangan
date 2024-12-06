<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalDetail;
use App\Models\ChartOfAccount;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;

class JournalController extends Controller
{
    public function index()
    {
        return view('admin.journal.index');
    }

    public function getData()
    {
        $journals = Journal::with(['details.coa'])
            ->orderBy('created_at', 'desc')
            ->orderBy('reference', 'desc')
            ->get();

        return DataTables::of($journals)
            ->addColumn('action', function ($row) {
                return '
                    <a class="btn btn-sm btn-primary edit" href="/journal/edit/' . $row->id . '"><i class="bx bx-pencil"></i></a>
                    <a class="btn btn-sm btn-danger delete" data-id="' . $row->id . '" href="javascript:void(0);"><i class="bx bxs-trash"></i></a>
                ';
            })
            ->addColumn('status', function ($row) {
                return $row->status == true ? 'Posted' : 'Draft';
            })
            ->addColumn('tanggal', function ($row) {
                return date('d M Y H:i', strtotime($row->created_at));
            })
            ->addColumn('akun', function ($row) {
                return $row->details->map(function ($detail) {
                    return $detail->coa ? $detail->coa->coa_name : 'Tidak ada Akun';
                })->join(', ');
            })
            ->addColumn('debet', function ($row) {
                $totalDebet = $row->details->filter(function ($detail) {
                    return $detail->coa->position == 'debit';
                })->sum('amount');
                return number_format($totalDebet, 2, ',', '.');
            })
            ->addColumn('credit', function ($row) {
                $totalKredit = $row->details->filter(function ($detail) {
                    return $detail->coa->position == 'credit';
                })->sum('amount');
                return number_format($totalKredit, 2, ',', '.');
            })
            ->rawColumns(['action', 'tanggal'])
            ->make(true);

        // $journals = Journal::with(['details.coa'])
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        // return DataTables::of($journals)
        //     ->addColumn('action', function ($row) {
        //         return '
        //             <a class="btn btn-sm btn-primary edit" href="/journal/edit/' . $row->id . '"><i class="bx bx-pencil"></i></a>
        //             <a class="btn btn-sm btn-danger delete" data-id="' . $row->id . '" href="javascript:void(0);"><i class="bx bxs-trash"></i></a>
        //         ';
        //     })
        //     ->addColumn('status', function ($row) {
        //         return $row->status ? 'Posted' : 'Draft';
        //     })
        //     ->addColumn('tanggal', function ($row) {
        //         return date('d M Y H:i:s', strtotime($row->created_at));
        //     })
        //     ->addColumn('details', function ($row) {
        //         return $row->details->map(function ($detail) {
        //             $coa_name = $detail->coa ? $detail->coa->coa_name : '- Akun salah. #DD';
        //             return $coa_name . ' (' .$detail->amount . ')';
        //         })->join('<br>');
        //     })
        //     ->rawColumns(['action', 'details', 'tanggal'])
        //     ->make(true);
    }

    public function create()
    {
        $chart_of_accounts = ChartOfAccount::all();
        return view('admin.journal.form', compact('chart_of_accounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|string|max:24',
            'status' => 'nullable|boolean',
            'details' => 'required|array|min:2',
            'details.*.coa_id' => 'required|exists:finance_chart_of_account,id',
            'details.*.amount' => 'required|numeric|min:0.01',
        ], [
            'details.min' => 'At least two accounts (debit and credit) are required.',
        ]);

        DB::beginTransaction();
        try {
            $journal = Journal::updateOrCreate([
                'id' => $request->id,
            ], [
                'reference' => $request->reference,
                'status' => $request->status ?? false,
                'user_id' => auth()->id(),
                'uuid' => $request->id ? $request->uuid : (string) \Str::uuid(),
            ]);

            // Clear old details if updating
            if ($request->id) {
                $journal->details()->delete();
            }

            // Save journal details
            foreach ($request->details as $detail) {
                $journal->details()->create([
                    'coa_id' => $detail['coa_id'],
                    'amount' => $detail['amount'],
                ]);
            }

            DB::commit();
            return redirect()->route('journal.index')->with(['success' => 'Data successfully saved']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('journal.index')->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $journal = Journal::with('details')->findOrFail($id);
        $chartOfAccounts = ChartOfAccount::all();
        return view('admin.journal.form', compact('journal', 'chartOfAccounts'));
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $journal = Journal::findOrFail($id);
            $journal->details()->delete();
            $journal->delete();

            DB::commit();
            return redirect()->route('journal.index')->with(['success' => 'Data successfully deleted']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('journal.index')->with(['error' => $e->getMessage()]);
        }
    }
}
