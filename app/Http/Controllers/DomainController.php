<?php

namespace App\Http\Controllers;

use App\Models\DomainsModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DomainController extends Controller
{
    function index()
    {
        $sent = ['data' => DomainsModel::orderBy('id', 'desc')->get()];
        return view('domains.index', $sent);
    }

    public function store(Request $request)
    {
        $request->validate([
            'domain' => 'required|unique:domains,domain|max:255',
            // 'name' => 'required|unique:domains,name|max:255',
            // 'investor' => 'required|unique:domains,investor|max:255',
        ]);

        DomainsModel::create([
            'domain' => $request->domain,
            'name' => $request->name,
            'investor' => $request->investor
        ]);

        return redirect()->route('domains.index')->with('success', 'Domain added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'domain' => 'required|url',
            'investor' => 'required',
        ]);

        $domain = DomainsModel::findOrFail($id);
        $domain->update([
            'name' => $request->name,
            'domain' => $request->domain,
            'investor' => $request->investor,
        ]);

        return redirect()->back()->with('success', 'Domain berhasil diperbarui!');
    }

    public function destroy($id)
    {
        try {
            DomainsModel::destroy($id);
            return redirect()->route('domains.index')->with('success', 'Domain deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('domains.index')->with('error', 'Failed to delete domain.');
        }
    }

    public function datatables(Request $r)
    {
        if ($r->ajax()) {

            $data = DomainsModel::query();
            return DataTables::eloquent($data)
                ->addColumn('action', 'partial-action')
                ->toJson();
        }
    }
}
