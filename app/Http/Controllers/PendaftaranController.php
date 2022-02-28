<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\JadwalDokter;
use App\Models\Kamar;
use App\Models\Keluhan;
use App\Models\Pendaftaran;
use App\Models\Ruang;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::with('keluhan', 'ruang', 'jadwal', 'kamar')->get();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluhan = Keluhan::all();
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = Kamar::all();

        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.create', compact('keluhan', 'ruang', 'jadwal', 'kamar'));
    }

    public function cetakForm()
    {
        return view('pendaftaran.cetak');
    }

    public function cetakPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetak = Pendaftaran::whereDate('tanggal_daftar', '>=', $tglawal)->whereDate('tanggal_daftar', '<=', $tglakhir)->get();
        return view('pendaftaran.cetak-pertanggal', compact('cetak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama_pasien' => 'required',
            'id_keluhan' => 'required',
            'tanggal_daftar' => 'required',
            'no_telepon' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'jadwal_periksa' => 'required',
            'id_ruang' => 'required',
            'id_kamar' => 'required',
            'cara_bayar' => 'required',
        ]);

        $pendaftaran = new Pendaftaran;

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
        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $keluhan = Keluhan::all();
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = Kamar::all();

        return view('pendaftaran.show', compact('pendaftaran', 'keluhan', 'ruang', 'jadwal', 'kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $keluhan = Keluhan::all();
        $ruang = Ruang::all();
        $jadwal = JadwalDokter::all();
        $kamar = kamar::all();

        return view('pendaftaran.edit', compact('pendaftaran', 'keluhan', 'ruang', 'jadwal', 'kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nama_pasien' => 'required',
            'id_keluhan' => 'required',
            'tanggal_daftar' => 'required',
            'no_telepon' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'jadwal_periksa' => 'required',
            'id_ruang' => 'required',
            'id_kamar' => 'required',
            'cara_bayar' => 'required',
        ]);

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
        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('pendaftaran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $Pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $pendaftaran = Pendaftaran::findOrFail($id);
        // $pendaftaran->delete();
        // return redirect()->route('pendaftaran.index');
        if (!Pendaftaran::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('pendaftaran.index');

    }
}
