<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\DataDokter;
use App\Models\JadwalDokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DataDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = DataDokter::with('jadwal', 'spesialis')->get();
        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jadwal = JadwalDokter::all();
        $dokter = DataDokter::all();
        $spesialis = Spesialis::all();
        return view('dokter.create', compact('jadwal', 'dokter', 'spesialis'));
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

            'nik' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'id_spesialis' => 'required',
            'alamat' => 'required',
        ]);

        $dokter = new DataDokter();
        $dokter->nik = $request->nik;
        $dokter->id_dokter = $request->id_dokter;
        $dokter->jk = $request->jk;
        $dokter->id_spesialis = $request->id_spesialis;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('dokter.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataDokter  $dataDokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = DataDokter::findOrFail($id);
        $jadwal = JadwalDokter::all();
        $spesialis = Spesialis::all();
        return view('dokter.show', compact('dokter', 'jadwal', 'spesialis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataDokter  $dataDokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = DataDokter::findOrFail($id);
        $jadwal = JadwalDokter::all();
        $spesialis = Spesialis::all();
        return view('dokter.edit', compact('dokter', 'jadwal', 'spesialis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataDokter  $dataDokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nik' => 'required',
            'id_dokter' => 'required',
            'jk' => 'required',
            'id_spesialis' => 'required',
            'alamat' => 'required',
        ]);

        $dokter = new DataDokter();
        $dokter->nik = $request->nik;
        $dokter->id_dokter = $request->id_dokter;
        $dokter->jk = $request->jk;
        $dokter->id_spesialis = $request->id_spesialis;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('dokter.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataDokter  $dataDokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Datadokter::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('dokter.index');

// $dokter->delete();
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Data deleted successfully",
        // ]);
        return redirect()->route('dokter.index');

    }
}
