<?php

namespace App\Http\Controllers;

use App\homeUser;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sold = homeUser::finished()->latest()->paginate(5);
        $soldc = homeUser::finished()->latest()->count();
        $acc = homeUser::going()->latest()->paginate(5);
        $accC = homeUser::going()->latest()->count();
        $pending = homeUser::pending()->latest()->paginate(5);
        $pendingC = homeUser::pending()->latest()->count();
        return view('admin.laporan',compact('sold','soldc','acc','accC','pending','pendingC'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
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
        //
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
