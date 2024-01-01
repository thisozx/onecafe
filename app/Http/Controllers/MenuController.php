<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::latest()->paginate(10);
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/menu', $foto->hashName());
        $menu = Menu::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $foto->hashName(),
        ]);
        if ($menu) {
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menu.ubah', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/menu', $foto->hashName());
        $menu = Menu::find($id);
        $menu->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $foto->hashName(),
        ]);
        if ($menu) {
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        Storage::disk('local')->delete('public/menu/' . $menu->foto);
        $menu->delete();
        if ($menu) {
            return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('menu.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
