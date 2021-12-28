<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $jadwal = JadwalDokter::all();
        return view('jadwaldokter.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwaldokter.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama_dokter' => 'required',
        ]);

        $jadwal = new JadwalDokter;
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();
        return redirect()->route('jadwaldokter.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalDokter  $jadwal_dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jadwal = JadwalDokter::findOrFail($id);
        return view('jadwaldokter.show', compact('jadwal'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwalDokter  $jadwal_dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jadwal = JadwalDokter::findOrFail($id);
        return view('jadwaldokter.edit', compact('jadwal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalDokter  $jadwal_dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama_dokter' => 'required',
        ]);

        $jadwal = new JadwalDokter;
        $jadwal->nama_dokter = $request->nama_dokter;
        $jadwal->waktu_mulai = $request->waktu_mulai;
        $jadwal->waktu_akhir = $request->waktu_akhir;
        $jadwal->save();
        return redirect()->route('jadwaldokter.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDokter  $jadwal_dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwaldokter.index');

    }
}
