<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\pesanSementara;
use Illuminate\Http\Request;

class CustController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::latest()->paginate(10);
        $foods = Menu::where('kategori', 'makanan')->get();
        $drinks = Menu::where('kategori', 'minuman')->get();
        $pesan = pesanSementara::latest()->paginate(10);

        return view('cust.index', compact('menu','foods', 'drinks', 'pesan'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
