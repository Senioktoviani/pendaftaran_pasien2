<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spesialis = Spesialis::all();
        return view('spesialis.index', compact('spesialis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spesialis.create');

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
            'nama_spesialis' => 'required',
        ]);

        $spesialis = new Spesialis;
        $spesialis->nama_spesialis = $request->nama_spesialis;
        $spesialis->save();
        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('spesialis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        return view('spesialis.show', compact('spesialis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        return view('spesialis.edit', compact('spesialis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_spesialis' => 'required',
        ]);

        $spesialis = new Spesialis;
        $spesialis->nama_spesialis = $request->nama_spesialis;
        $spesialis->save();
        Alert::success('Good Job', 'Data Saved Successfully');

        return redirect()->route('spesialis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spesialis  $spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $spesialis = Spesialis::findOrFail($id);

        if (!Spesialis::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('index.index');

        // $spesialis->delete();
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Data deleted successfully",
        // ]);
        return redirect()->route('spesialis.index');
    }
}
