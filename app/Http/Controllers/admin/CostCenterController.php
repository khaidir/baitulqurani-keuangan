<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CostCenters;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Auth;

class CostCenterController extends Controller
{
    public function index()
    {
        return view('admin.cost-center.index');
    }

    public function getData()
    {
        $costCenters = CostCenters::select('*')
            ->orderBy('created_at', 'desc')
            ->get();

        return DataTables::of($costCenters)
            ->addColumn('action', function ($row) {
                return '
                    <a class="btn btn-sm btn-primary edit" href="/cost-center/edit/' . $row->id . '"><i class="bx bx-pencil"></i></a>
                    <a class="btn btn-sm btn-danger delete" data-id="' . $row->id . '" href="javascript:void(0);"><i class="bx bxs-trash"></i></a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.cost-center.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cost_name' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'nullable',
        ], [
            'cost_name.required' => 'Cost Center is required',
        ]);

        DB::beginTransaction();
        try {
            CostCenters::updateOrCreate([
                'id' => @$request->id
            ], @$request->all());

            DB::commit();
            return redirect()->route('cost-center.index')->with(['success' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('cost-center.index')->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id = null)
    {
        $data = CostCenters::find($id);
        return view('admin.cost-center.form', compact('data'));
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $costCenter = CostCenters::find($id);
            $costCenter->delete();

            DB::commit();
            return redirect()->route('cost-center.index')->with(['success' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('cost-center.index')->with(['error' => $e->getMessage()]);
        }
    }
}
