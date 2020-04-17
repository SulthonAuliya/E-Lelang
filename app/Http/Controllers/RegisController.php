<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisController extends Controller
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
        $user = User::latest()->paginate(5);
        return view('admin.regist',compact('user'))
                ->with('i', (request()->input('page', 1) - 1) * 5);;
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $data = User::findOrFail($user);
        return view('admin.regisEdit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $request->validate([
            'id'             => 'required',
            'credential'     => 'required',
        ]);
        
        $status = $request->credential;

         if($status == 'admin'){
            DB::table('users')
            ->where('id', $request->id)
            ->update(['isAdmin' =>1, 'isPetugas' => 0]);
         }
         else if($status == 'petugas'){
            DB::table('users')
            ->where('id', $request->id)
            ->update(['isPetugas' =>1, 'isAdmin' => 0]);
         }
         else if($status == 'user'){
            DB::table('users')
            ->where('id', $request->id)
            ->update(['isPetugas' =>0, 'isAdmin' => 0]);
         }

        
        return redirect()->route('regis.index')
                         ->with('succes','barang anda sudah berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function cari(Request $request)
    {
    // menangkap data pencarian
    $cari = $request->cari;
 
    // mengambil data dari table pegawai sesuai pencarian data
    $user = DB::table('users')
    ->where('name','like',"%".$cari."%")
    ->paginate();
 
        // mengirim data pegawai ke view index
    return view('admin.regist',['user' => $user]);
 
    }

}
