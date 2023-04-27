<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function getCreatePage() {
        return view('create');
    }


public function createBarang(Request $request){

        Barang::create([
            'kategori_barang' => $request->kategori_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_barang' => $request->jumlah_barang,
            // 'foto_barang' => $imageName,
        ]);


        return redirect(route('getBarangs'));
    }

}
