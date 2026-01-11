<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;


class VendorController extends Controller
{
    public function list()
    {
        $vendors = Vendor::latest()->get();
        return view('vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        Vendor::create($request->all());
        return redirect()->route('vendors.list')->with('success', 'Vendor added successfully');
    }

    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {
        Vendor::findOrFail($id)->update($request->all());
        return redirect()->route('vendors.list')->with('success', 'Vendor updated successfully');
    }

    public function destroy($id)
    {
        Vendor::destroy($id);
        return back()->with('success', 'Vendor deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Vendor::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected vendors deleted successfully');
    }

    public function changeStatus($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = !$vendor->status;
        $vendor->save();
        return back()->with('success', 'Vendor status updated');
    }
}