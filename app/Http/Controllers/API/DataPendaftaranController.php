<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DataPendaftaranController extends Controller
{

    public function index()
    {
        //get data from table keluhan
        $pendaftaran = Pendaftaran::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data pendaftaran',
            'data' => $pendaftaran,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $pendaftaran = new Pendaftaran();
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->id_keluhan = $request->id_keluhan;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwal_periksa = $request->jadwal_periksa;
        $pendaftaran->id_ruang = $request->id_ruang;
        $pendaftaran->id_kamar = $request->id_kamar;

        $pendaftaran->cara_bayar = $request->cara_bayar;

        $pendaftaran->save();
        return response()->json([
            'success' => true,
            'message' => 'Data pendaftaran Berhasil Dibuat',
            'data' => $pendaftaran,
        ], 201);

    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        if ($pendaftaran) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data pendaftaran',
                'data' => $pendaftaran,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data pendaftaran Tidak Ditemukan',
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

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->nama_pasien = $request->nama_pasien;
        $pendaftaran->id_keluhan = $request->id_keluhan;
        $pendaftaran->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaran->no_telepon = $request->no_telepon;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->jk = $request->jk;
        $pendaftaran->jadwal_periksa = $request->jadwal_periksa;
        $pendaftaran->id_ruang = $request->id_ruang;
        $pendaftaran->id_kamar = $request->id_kamar;

        $pendaftaran->cara_bayar = $request->cara_bayar;

        $pendaftaran->save();
        return response()->json([
            'success' => true,
            'message' => 'Data pendaftaran Berhasil Dibuat',
            'data' => $pendaftaran,
        ], 201);
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data pendaftaran Berhasil Dihapus',
            'data' => $pendaftaran,
        ], 200);

    }
}
