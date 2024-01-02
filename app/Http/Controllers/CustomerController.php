<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function login()
    {
        return view('cust.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi formulir
        $request->validate([
            'namaCustomer' => 'required',
            'nomorMeja' => 'required',
        ]);

        // Simpan data ke basis data
        Customer::create([
            'nama' => $request->namaCustomer,
            'nomeja' => $request->nomorMeja,
        ]);

        // Redirect atau tampilkan pesan sukses sesuai kebutuhan
        return redirect()->route('cust')->with('success', 'Silahkan Lakukan Pemesanan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
