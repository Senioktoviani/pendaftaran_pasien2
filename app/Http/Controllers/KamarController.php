<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamar.index', compact('kamar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
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
            'nama_kamar' => 'required',
        ]);

        $kamar = new kamar;
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->save();
        Alert::success('Good Job', 'Data Saved Successfully');
        return redirect()->route('kamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kamar' => 'required',
        ]);

        $kamar = Ruang::findOrFail($id);
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->save();
        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $ruang = Ruang::findOrFail($id);
        if (!Kamar::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('kamar.index');

    }
}
