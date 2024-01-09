<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Riwayat;
use App\Models\pesanSementara;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::latest()->paginate(10);
        return view('pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Membuat Pesanan baru
        $pesanan = Pesanan::create([
            'meja' => $request->meja,
            'menu' => $request->menu,
            'jumlah' => $request->jumlah,
            'total' => $request->jumlah * $request->harga,
            'status' => 0,
        ]);

        if ($pesanan) {
            // Jika Pesanan berhasil disimpan, kita dapat menghapus data dari pesanSementara
            pesanSementara::truncate();
            return redirect()->back()->with(['success' => 'Pesanan Sudah Masuk! Silahkan Menunggu']);
        } else {
            return redirect()->back()->with(['error' => 'Yah! Pesanan mu gagal masuk, silahkan hubungi pelayan']);
        }
    }


    public function simpan(Request $request)
 {
     $customerId = $request->input('customer');

     $pesanan = PesanSementara::create([
         'menu' => $request->menu,
         'harga' => $request->harga,
         'jumlah' => $request->jumlah,
         'total' => $request->jumlah * $request->harga,
         'status' => 0,
         'customer' => $customerId,
     ]);

     if ($pesanan) {
         return redirect()->back()->with(['success' => 'Pesanan Berhasil Disimpan!']);
     } else {
         return redirect()->back()->with(['error' => 'Pesanan Gagal Disimpan! Silahkan hubungi pelayan']);
     }
 }



    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $pesanan = Pesanan::find($id);

        if ($pesanan) {
            // update status saja
            if ($pesanan->status == 0) {
                $pesanan->status = 1;
            } elseif ($pesanan->status == 1) {
                $pesanan->status = 2;
            } else {
                $pesanan->status = 2;
            }
            $pesanan->save();

            if ($pesanan->status == 2) {
                // pindahkan data ke tabel lain
                $riwayat = new Riwayat();
                $riwayat->pesanan = $pesanan->id;
                $riwayat->total = $pesanan->total;
                // set field lainnya
                $riwayat->save();
            }
        }
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesanan = pesanSementara::find($id);
        $pesanan->delete();
        if ($pesanan) {
            return redirect()->route('cust.index');
        } else {
            return redirect()->route('cust.index');
        }
    }
}
