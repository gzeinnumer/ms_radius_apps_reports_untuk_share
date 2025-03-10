<?php

namespace App\Http\Controllers;

use App\Models\DomainsModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DomainController extends Controller
{
    function index()
    {
        $sent = ['data' => DomainsModel::orderBy('id', 'asc')->get()];
        return view('domains.index', $sent);
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_id' => 'nullable|string|max:100',
            'site_name' => 'nullable|string|max:200',
            'island' => 'nullable|string|max:200',
            'area' => 'nullable|string|max:200',
            'lat' => 'nullable|string|max:200',
            'lng' => 'nullable|string|max:200',
            'domain' => 'required|url|unique:domains,domain',
            'investor' => 'required|string|max:200',
            'name' => 'nullable|string|max:200',
        ]);

        DomainsModel::create($request->all());

        return redirect()->route('domains.index')->with('success', 'Domain added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'domain' => 'required|url',
            'investor' => 'required',
            'site_id' => 'required',
            'site_name' => 'required',
            'island' => 'required',
            'area' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);

        $domain = DomainsModel::findOrFail($id);
        $domain->update([
            'name' => $request->name,
            'domain' => $request->domain,
            'investor' => $request->investor,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'island' => $request->island,
            'area' => $request->area,
            'lat' => $request->lat,
            'lng' => $request->lng,
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
