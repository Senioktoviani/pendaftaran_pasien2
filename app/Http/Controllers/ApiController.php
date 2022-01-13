<?php

namespace App\Http\Controllers;

use App\Models\keluhan;
use Illuminate\Http\Request;
use Session;

class ApiController extends Controller
{
    public function index()
    {

        $keluhan = Keluhan::all();

        //ubah ke JSON
        return response()->json([
            'succes' => true,
            'message' => 'list Data Keluhan',
            'data' => $keluhan,
        ], 200);

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        // validasi data
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
        //ubah ke JSON
        return response()->json([
            'succes' => true,
            'message' => 'list Data Keluhan',
            'data' => $keluhan,
        ], 200);

    }

    public function show($id)
    {

        $keluhan = Keluhan::find($id);

        //ubah ke JSON
        return response()->json([
            'succes' => true,
            'message' => 'list Data Keluhan',
            'data' => $keluhan,
        ], 200);

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->nama_keluhan = $request->nama_keluhan;
        $keluhan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);

        return response()->json([
            'succes' => true,
            'message' => 'list Ubah Data Keluhan',
            'data' => $keluhan,
        ], 200);

    }

}
