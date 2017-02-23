<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use App\Golongan;
use App\Tunjangans;

class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangan = Tunjangans::all();
        return view('tunjangan.index', compact('tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $jabatan = Jabatan::all();
         $golongan = Golongan::all();
        return view('tunjangan.create', compact('golongan','jabatan'));


        
       
       
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
        /*if ($tunjang->Status === "sudah"){
           ($tunjang->Jumlah_anak);
        }
        elseif ($tunjang->Status === "belum"){
           is_null($tunjang->Jumlah_anak);
        }*/

        $tunjangan = Request::all();
        Tunjangans::create($tunjangan);
        return redirect('TUNJANGAN');
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
        $jabatan = Jabatan::all();
         $golongan = Golongan::all();
        $tunjangan = Tunjangans::find($id);
        return view('tunjangan.edit', compact('tunjangan','golongan', 'jabatan'));
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
        $tunjanganUpdate = Request::all();
        $tunjangan = Tunjangans::find($id);
        $tunjangan->update($tunjanganUpdate);
        return redirect('TUNJANGAN');
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
        Tunjangans::find($id)->delete();
        return redirect('TUNJANGAN');
    }
}
