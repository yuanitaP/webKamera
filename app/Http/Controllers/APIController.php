<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function searchKamera(Request $request)
    {
        $cari = $request->input('q');

        $kamera = Kamera::where('merk', 'LIKE', "%$cari%")->get();

        if($kamera->isEmpty())
        {
            return response()->json([
                'success'   => false,
                'data'      => 'Data Tidak Ditemmukan'
            ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.01:5500');
        }
        else{
            return response()->json([
                'success'   => true,
                'data'      => $kamera
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.01:5500');
        }
    }
}
