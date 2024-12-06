<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChartOfAccount;
use App\Models\CostCenters;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;

class CoaController extends Controller
{
    public function index()
    {
        return view('admin.coa.index');
    }

    public function getData()
    {
        $chartOfAccounts = ChartOfAccount::with('CostCenter')
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($chartOfAccounts)
            ->addColumn('action', function ($row) {
                return '
                    <a class="btn btn-sm btn-primary edit" href="/coa/edit/' . $row->id . '"><i class="bx bx-pencil"></i></a>
                    <a class="btn btn-sm btn-danger delete" data-id="' . $row->id . '" href="javascript:void(0);"><i class="bx bxs-trash"></i></a>
                ';
            })
            ->addColumn('cost_center', function ($row) {
                return $row->costCenter ? $row->costCenter->cost_name : 'N/A';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $cost_centers = CostCenters::all();
        return view('admin.coa.form', compact('cost_centers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'coa_id' => 'nullable|integer',
            'cost_id' => 'nullable|exists:finance_cost_center,id',
            'code' => 'required|string|max:10',
            'coa_name' => 'required|string|max:50',
            'position' => 'required|in:debit,credit',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ], [
            'code.required' => 'Code is required',
            'coa_name.required' => 'COA Name is required',
            'position.required' => 'Position is required',
        ]);

        DB::beginTransaction();
        try {
            ChartOfAccount::updateOrCreate([
                'id' => @$request->id
            ], $request->all());

            DB::commit();
            return redirect()->route('coa.index')->with(['success' => 'Data successfully saved']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('coa.index')->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id = null)
    {
        $data = ChartOfAccount::find($id);
        $cost_centers = CostCenters::all();
        return view('admin.coa.form', compact('data', 'cost_centers'));
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $coa = ChartOfAccount::find($id);
            $coa->delete();

            DB::commit();
            return redirect()->route('coa.index')->with(['success' => 'Data successfully deleted']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('coa.index')->with(['error' => $e->getMessage()]);
        }
    }
}
