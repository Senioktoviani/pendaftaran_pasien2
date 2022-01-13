<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Session;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index', compact('keluhan'));

        //ubah ke JSON
        // return response()->json([
        //  'succes' => true,
        // 'message' => 'list Data Keluhan',
        // 'data' => $keluhan,
        // ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluhan.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_keluhan' => 'required',
        ]);

        $keluhan = new Keluhan;
        $keluhan->nama_keluhan = $request->nama_keluhan;
        $keluhan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('keluhan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.show', compact('keluhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.edit', compact('keluhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_keluhan' => 'required',
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->nama_keluhan = $request->nama_keluhan;
        $keluhan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);
        return redirect()->route('keluhan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('keluhan.index');
    }
}
