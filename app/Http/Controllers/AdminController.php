<?php

namespace App\Http\Controllers;

use App\homeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $barang = homeUser::latest()->paginate(10);
        return view('admin.konfirmasi',compact('barang'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function show(homeUser $homeUser)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        $data = homeUser::findOrFail($id_barang);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homeUser $homeUser)
    {
        $request->validate([

            'id_barang'     => 'required',
            'nama_barang'   => 'required',
            'tgl'           => 'required', 
            'harga_awal'    => 'required',
            'desc'          => 'required',
            'status'        => 'required',
            'image'         => 'required',
        ]);
        
        DB::table('barang')
            ->where('id_barang', $request->id_barang)
            ->update(['status' => $request->status]);
        return redirect()->route('e-lelang.index')
                         ->with('succes','barang anda sudah berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeUser $homeUser)
    {
        //
    }
}
