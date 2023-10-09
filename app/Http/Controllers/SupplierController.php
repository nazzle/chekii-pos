<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    //Getting all Suppliers
    public function index()
    {
        $suppliers = Supplier::orderBy('id', 'DESC')
            ->where('active', true)
            ->simplePaginate(50);

        //return view('suppliers.index', ['suppliers' => $suppliers]);
        return view('suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $supplier = new Supplier;
        $supplier->supplier_code = $request->input('supplierCode');
        $supplier->name = $request->input('name');
        $supplier->tin = $request->input('tin');
        $supplier->telephone = $request->input('telephone');
        $supplier->address = $request->input('address');
        $supplier->city = $request->input('city');
        $supplier->country = $request->input('country');
        $supplier->created_by = Auth::id();;
        $supplier->save();

        if ($supplier->save()) {
            //updating request code column using id of a newly saved record
            Supplier::where('id', $supplier->id)->update(['code' => $supplier->id]);
            return redirect()->route('suppliers.index')->with('success', 'Success, supplier has been created.');

        } else {
            return redirect()->back()->with('error', 'Sorry, there a problem while adding supplier.');
        }

    }
}
