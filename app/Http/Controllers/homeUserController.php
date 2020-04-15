<?php

namespace App\Http\Controllers;

use App\homeUser;
use App\harga;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\DB;

class homeUserController extends Controller
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
        $barang = homeUser::accepted()->latest()->paginate(15);
        return view('User.home',compact('barang'))
                ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now();
        $tgl = $date;
        $status = 'pending';
        return view('User.create',['tgl' => $tgl, 'status' => $status]);
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
            'id'            => 'required',
            'nama_barang'   => 'required',
            'tgl'           => 'required', 
            'harga_awal'    => 'required',
            'desc'          => 'required',
            'status'        => 'required',
            'image'         => 'required|image',
        ]);

        $image = $request->file('image');


        $new_img = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_img);
        $form_data = array(
            'user_id'       => $request->id,
            'nama_barang'   => $request->nama_barang,
            'tgl'           => $request->tgl, 
            'harga_awal'    => $request->harga_awal,
            'desc'          => $request->desc,
            'status'        => $request->status,
            'image'         => $new_img,
        );

        homeUser::create($form_data);

        return redirect()->route('e-lelang.index')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
        $data  = homeUser::findOrFail($id_barang);
        $date = Carbon::now();
        $tgl = $date;
        $hasil = harga::where('id_barang',$id_barang)->max('harga');
        $harga = harga::get();
        return view('User.detail', compact('data','hasil','harga','tgl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homeUser  $homeUser
     * @return \Illuminate\Http\Response
     */
    public function edit(homeUser $homeUser)
    {
        //
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
        $request->all();
        DB::table('barang')
                    ->where('id_barang', $request->id_barang)
                    ->update(['status' => 'ongoing']);
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
