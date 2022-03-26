<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class DataJadwalController extends Controller
{

    public function index()
    {
        //get data from table keluhan
        $jadwal = JadwalDokter::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Jadwal',
            'data' => $jadwal,
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $jadwal = new JadwalDokter;
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Jadwa; Berhasil Dibuat',
            'data' => $jadwal,
        ], 201);

    }

    public function show($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        if ($jadwal) {
            return response()->json([
                'success' => true,
                'message' => 'Show Data jadwal',
                'data' => $jadwal,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data jadwal Tidak Ditemukan',
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

        $jadwal = new JadwalDokter;
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();

        return response()->json([
            'success' => true,
            'message' => 'Data jadwal Berhasil Dibuat',
            'data' => $jadwal,
        ], 201);
    }

    public function destroy($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data jadwal Dokter Berhasil Dihapus',
            'data' => $jadwal,
        ], 200);

    }
}
