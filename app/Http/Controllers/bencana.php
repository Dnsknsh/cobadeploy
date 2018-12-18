<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelBencana;

class bencana extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelBencana::all();
        return view('bencana',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new    modelBencana();
       $data->nama_bencana = $request->nama;
       $data->lokasi = $request->kelurahan .", ".$request->kecamatan.", ".$request->kabupaten.", ".$request->provinsi;
       $data->jumlah_tim = 0;
       $data->save();
       return redirect()->route('tabelbencana')->with('alert-success','Berhasil Menambahkan Data!');
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
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_bencana)
    {
        $data = modelBencana::where('id_bencana',$id_bencana)->first();
        $data->delete();
        return redirect()->route('tabelbencana')->with('alert-success','Data telah dihapus');
    }
}
