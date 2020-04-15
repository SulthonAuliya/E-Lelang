@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-create">
                    <div class="container-fluid">
                        <div class="row container-fluid">
                            <div class="col-sm--12">
                                <h3>Owner : {{ $data->user->name }}</h3>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2vh;">
                            <div class="col-sm-4 image ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="detail_img ">
                                            <img src="{{ URL::to('/') }}/images/{{ $data->image }}" alt="your image" id="disp_img">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="heads row">
                                    <div class="col-sm-12">
                                        <h3><b>{{ $data->nama_barang }}</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>Desc</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="kotak overflow-auto">
                                            <pre>{{ $data->desc }}</pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="row desk">
                                    <div class="col-sm-8">
                                        <h5>
                                            Last Bid
                                        </h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>*refresh untuk melihat harga terbaru</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <h2 class="biru">
                                        Rp.{{ $data->harga_awal }}
                                    </h2>
                                </div>
                                <div class="row btn-edit">
                                    <div class="col-sm-4 offset-8 ">
                                        <form action="{{ route('admin.update',$data->id_barang) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input name="id" id="id" value="{{ $data->user->id }}" type="text" class="none">

                                            <input name="id_barang" id="id_barang" value="{{ $data->id_barang }}" type="text" class="none">

                                            <input name="nama_barang" id="nama_barang" value="{{ $data->nama_barang }}" type="text" class="none">

                                            <input name="tgl" id="tgl" value="{{ $data->tgl }}" type="text" class="none">

                                            <input name="harga_awal" id="harga_awal" value="{{ $data->harga_awal }}" type="text" class="none">

                                            <input name="desc" id="desc" value="{{ $data->desc }}" type="text" class="none">

                                            <input name="image" id="image" value="{{ $data->image }}" type="text" class="none">

                                            @if ($data->status == 'accepted')
                                            <input name="status" class="none" type="text" id="status" value="ongoing">
                                            <button type="submit" class="btn btn-info be">
                                                start
                                            </buttton>
                                            
                                            @elseif ($data->status == 'pending')
                                            <input name="status" class="none" type="text" id="status" value="accepted">
                                            <button type="submit" class="btn btn-success be">
                                                accept
                                            </buttton>

                                            @elseif ($data->status == 'ongoing')
                                            <input name="status" class="none" type="text" id="status" value="finished">
                                            <button type="submit" class="btn btn-success be">
                                                finish
                                            </buttton>
                                            
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 