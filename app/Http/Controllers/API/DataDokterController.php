<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataDokter;
use Illuminate\Http\Request;

class DataDokterController extends Controller
{

    public function index()
    {
        //get data from table keluhan
        $dokter = DataDokter::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Dokter',
            'data' => $dokter,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $dokter = new DataDokter();
        $dokter->nik = $request->nik;
        $dokter->id_dokter = $request->id_dokter;
        $dokter->jk = $request->jk;
        $dokter->id_spesialis = $request->id_spesialis;
        $dokter->alamat = $request->alamat;
        $dokter->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Dokter Berhasil Dibuat',
            'data' => $dokter,
        ], 201);

    }

    public function show($id)
    {
        $dokter = DataDokter::findOrFail($id);
        if ($dokter) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data dokter',
                'data' => $dokter,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data dokter Tidak Ditemukan',
                'data' => [],
            ], 200);
        }

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $dokter = new DataDokter();
        $dokter->nik = $request->nik;
        $dokter->id_dokter = $request->id_dokter;
        $dokter->jk = $request->jk;
        $dokter->id_spesialis = $request->id_spesialis;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Dokter Berhasil Dibuat',
            'data' => $dokter,
        ], 201);
    }

    public function destroy($id)
    {
        $dokter = DataDokter::findOrFail($id);
        $dokter->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data dokter Berhasil Dihapus',
            'data' => $dokter,
        ], 200);

    }
}
