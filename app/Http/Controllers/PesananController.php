<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Riwayat;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'meja' => 'required|integer',
            'pesanan.*.id' => 'required|integer',
            'pesanan.*.nama' => 'required|string',
            'pesanan.*.jumlah' => 'required|integer|min:1',
        ]);
        // Hitung total pesanan
        $totalPesanan = 0;

        try {
            foreach ($request->input('pesanan') as $pesananItem) {
                $totalPesanan += $pesananItem['harga'] * $pesananItem['jumlah'];
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat memproses data pesanan: ' . $e->getMessage()
            ], 500);
        }

        // Proses penyimpanan pesanan dan total pesanan
        $pesanan = new Pesanan;
        $pesanan->meja = $request->input('meja');
        $pesanan->total = $totalPesanan;
        $pesanan->status = 0;

        try {
            foreach ($request->input('pesanan') as $pesananItem) {
                $pesanan->create([
                    'menu' => $pesananItem['nama'],
                    'jumlah' => $pesananItem['jumlah'],
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat memproses data pesanan: ' . $e->getMessage()
            ], 500);
        }

        $pesanan->save();

        // Respond dengan sesuatu, seperti pesan sukses atau data yang disimpan
        return response()->json(['message' => 'Pesanan berhasil disimpan'], 200);
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
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
