<?php

namespace App\Http\Controllers;

use App\Models\CurahHujan;
use Illuminate\Http\Request;

class CurahHujanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = CurahHujan::all()->sortDesc();
        return view('pages.data', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tanggal' => 'required|date',
            'nilai_curah_hujan' => 'required|numeric'
        ]);

        CurahHujan::create([
            'tanggal' => $request->tanggal,
            'nilai' => $request->nilai_curah_hujan
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'tanggal' => 'required|date',
            'nilai_curah_hujan' => 'required|numeric'
        ]);

        $data = CurahHujan::find($id);

        $data->tanggal = $request->tanggal;
        $data->nilai = $request->nilai_curah_hujan;

        $data->save();

        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
