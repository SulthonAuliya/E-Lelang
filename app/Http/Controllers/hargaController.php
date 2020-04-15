<?php

namespace App\Http\Controllers;

use App\harga;
use Illuminate\Http\Request;

class hargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'user_id'     => 'required',
            'id_barang'   => 'required',
            'harga'       => 'required', 
        ]);
        harga::create($request->all());
          $id =  $request->id_barang;
        return redirect()->route('e-lelang.show',['id_barang' => $id])->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(harga $harga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit(harga $harga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, harga $harga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy(harga $harga)
    {
        //
    }
}
