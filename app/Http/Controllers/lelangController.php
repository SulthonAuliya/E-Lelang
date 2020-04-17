<?php

namespace App\Http\Controllers;

use App\lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $pemilik = auth()->user()->id;
        $barangku = lelang::latest()->paginate(10);
        return view('User.barangku',compact('barangku', 'pemilik'))
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
        $request->validate([
            'user_id'     => 'required',
            'id_barang'   => 'required',
            'harga_akhir' => 'required', 
            'tgl'         => 'required'
        ]);
        lelang::create($request->all());
        DB::table('barang')
            ->where('id_barang', $request->id_barang)
            ->update(['status' => 'finished']);
        return redirect()->route('admin.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function show(lelang $lelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function edit(lelang $lelang)
    {
        // DB::table('barang')
        //     ->where('id_barang', $request->id_barang)
        //     ->update(['status' => $request->status]);
        // return redirect()->route('e-lelang.index')
        //                  ->with('succes','barang anda sudah berhasil di update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lelang $lelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(lelang $lelang)
    {
        //
    }
}
