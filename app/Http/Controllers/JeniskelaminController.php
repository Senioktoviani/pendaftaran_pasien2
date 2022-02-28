<?php

namespace App\Http\Controllers;

use App\Models\Jeniskelamin;
use Illuminate\Http\Request;
use Session;

class JeniskelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jeniskelamin::all();
        return view('jenis.index', compact('jenis'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('jenis.create');

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
            'jenis_kelamin' => 'required',
        ]);

        $jenis = new Jeniskelamin;
        $jenis->jenis_kelamin = $request->jenis_kelamin;
        $jenis->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('jenis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jeniskelamin::findOrFail($id);
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jeniskelamin::findOrFail($id);
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_kelamin' => 'required',
        ]);

        $jenis = Jeniskelamin::findOrFail($id);
        $jenis->jenis_kelamin = $request->jenis_kelamin;
        $jenis->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);
        return redirect()->route('jenis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $keluhan = Keluhan::findOrFail($id);

        if (!Jeniskelamin::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('jenis.index');

        // $keluhan->delete();
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Data deleted successfully",
        // ]);
        return redirect()->route('jenis.index');
    }
}
