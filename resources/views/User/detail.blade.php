@extends('layouts.app')

@section('content')
<div class="detail-page">
    <div class="container-fluid">
        <div class="card-detail card">
            <div class="row">
                <div class="col-sm-6">
                    <div class="image-product text-center">
                        <img class="img-fluid img-barang" src="{{ URL::to('/') }}/images/{{ $data->image }}" alt="your image" id="disp_img">
                    </div>
                </div>
                <div class="col-sm-5 kanan">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm--12">
                                <h3 class="owner"><b>Owner : {{ $data->user->name }}</b></h3>
                            </div>
                            <div class="col-sm-12">
                                <div class="title">
                                    <h3 class="nama-barang"><b>{{ $data->nama_barang }}</b></h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-sm--12">
                                <h3 class="desc-title">Desc</h3>
                            </div>
                            <div class="col-sm-12">
                                <div class="desc-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5>{{ $data->desc }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row desk">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="biru">
                                        Starting price
                                    </h5>
                                    <div class="col-sm-12">
                                        <h2 class="harga-awal">
                                            <b>Rp.{{ number_format($data->harga_awal) }}</b>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="biru">
                                        Last bid
                                    </h5>
                                </div>
                                <div class="col-sm-12">
                                    <h2 class="last-bid">
                                        <b>Rp.{{ number_format($hasil) }}</b>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mt-5 refresh">*refresh untuk melihat harga terbaru</h6>
                        </div>
                    </div>
                    @if(auth()->user()->isAdmin == 1 || auth()->user()->isPetugas == 1)
                    <div class="row">
                        <div class="col-sm-4 offset-8">
                    @if($data->status == 'accepted')
                        <a href="{{ route('admin.edit',$data->id_barang) }}" class="btn btn-info be btn-edit">Mulai Lelang</a>
                    @elseif($data->status == 'ongoing')
                        

                            <form action="{{ route('createLelang') }}" class="form" method="POST">
                            @csrf
                                <input name="id_barang" type="text" class="none" value="{{ $data->id_barang }}">

                                <input type="text" id="tgl" name="tgl" value="{{ $tgl->toDateString() }}" class="none">

                                <input name="harga_akhir" type="text" class="none" value="{{ $hasil }}">@foreach($harga->where('harga', $hasil) as $max)

                                <input name="user_id" type="text" class="none" value="{{ $max->user_id }}">

                                @endforeach   

                                <button type="submit" class="btn btn-info be btn-edit">hentikan Lelang</button>
                            </form>
                         
                    @elseif($data->status == 'finished')
                        <a href="" class="btn btn-info be btn-edit">Lelang telah berakhir</a>
                    @elseif($data->status == 'pending')
                        <a href=" {{ route('admin.edit',$data->id_barang) }} " class="btn btn-info be btn-edit">accept now</a>
                    @else

                    @endif
                        </div>
                    </div>
                
                @elseif(auth()->user()->isAdmin == 0 && auth()->user()->isPetugas == 0)

                    <div class="row">
                        @if($data->status == 'accepted')
                        <div class="col-xl-4 col-sm-12 col-md-12 offset-xl-8">
                            <a href="" class="btn btn-info btn-belum-mulai btn-edit">Lelang belum dimulai</a>
                        </div>

                        @elseif($data->status == 'ongoing')
                        <div class="col-sm-12">
                        <form action="{{ route('createHarga') }}" method="POST" class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input name="user_id" id="user_id" type="text" class="none" value="{{ auth()->user()->id }}">

                                <input name="id_barang" id="id_barang" type="text" class="none" value="{{ $data->id_barang }}">
                                
                                <div class="col-xl-9 col-sm-12">
                                    <input name="harga" min="{{ $data->harga_awal }}" id="harga" type="number" class="form-control form-harga" 
                                    min="{{ $data->harga_awal }}" placeholder="Masukan tawaran anda">
                                </div>

                                <div class="col-xl-3 col-sm-12">
                                    <button type="submit" id="harga" class="btn btn-info form-harga be btn-edit">Ajukan</button>
                                </div>
                            </div>
                        </form> 
                        </div>
                        @elseif($data->status == 'finished')
                        <div class="col-sm-4 offset-8">
                            <a href="" class="btn btn-info be btn-edit">Lelang telah berakhir</a>
                        </div>
                        @endif 
                    </div>

                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
{{-- <div class="col-sm-12"> 
                <div class="card card-creates">
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
                                    <div class="col-sm-4">
                                        <h5>
                                            harga_awal
                                        </h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5>
                                            Last bid
                                        </h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>*refresh untuk melihat harga terbaru</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2 class="biru">
                                            Rp.{{ $data->harga_awal }}
                                        </h2>
                                    </div> 
                                    <div class="col-sm-4">

                                        <h2 class="biru">
                                            Rp.{{ $hasil }}
                                        </h2>

                                    </div>  
                                    
                                </div>
                            </div>
                        </div> 
                            @if(auth()->user()->isAdmin == 1 || auth()->user()->isPetugas == 1)
                                <div class="row">
                                    <div class="col-sm-4 offset-8">
                                @if($data->status == 'accepted')
                                    <a href="{{ route('admin.edit',$data->id_barang) }}" class="btn btn-info be btn-edit">Mulai Lelang</a>
                                @elseif($data->status == 'ongoing')
                                    

                                        <form action="{{ route('createLelang') }}" class="form" method="POST">
                                        @csrf
                                            <input name="id_barang" type="text" class="none" value="{{ $data->id_barang }}">

                                            <input type="text" id="tgl" name="tgl" value="{{ $tgl->toDateString() }}" class="none">
        
                                            <input name="harga_akhir" type="text" class="none" value="{{ $hasil }}">@foreach($harga->where('harga', $hasil) as $max)

                                            <input name="user_id" type="text" class="none" value="{{ $max->user_id }}">

                                            @endforeach   

                                            <button type="submit" class="btn btn-info be btn-edit">hentikan Lelang</button>
                                        </form>
                                     
                                @elseif($data->status == 'finished')
                                    <a href="" class="btn btn-info be btn-edit">Lelang telah berakhir</a>
                                @elseif($data->status == 'pending')
                                    <a href=" {{ route('admin.edit',$data->id_barang) }} " class="btn btn-info be btn-edit">accept now</a>
                                @else

                                @endif
                                    </div>
                                </div>
                            
                            @elseif(auth()->user()->isAdmin == 0 && auth()->user()->isPetugas == 0)

                                <div class="row">
                                    @if($data->status == 'accepted')
                                    <div class="col-sm-4 offset-8">
                                        <a href="" class="btn btn-info be btn-edit">Lelang belum dimulai</a>
                                    </div>

                                    @elseif($data->status == 'ongoing')
                                    <div class="col-sm-12">
                                    <form action="{{ route('createHarga') }}" method="POST" class="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <input name="user_id" id="user_id" type="text" class="none" value="{{ auth()->user()->id }}">

                                            <input name="id_barang" id="id_barang" type="text" class="none" value="{{ $data->id_barang }}">
                                            
                                            <div class="col-sm-9">
                                                <input name="harga" min="{{ $data->harga_awal }}" id="harga" type="number" class="form-control form-harga" 
                                                min="{{ $data->harga_awal }}" placeholder="Masukan tawaran anda">
                                            </div>

                                            <div class="col-sm-3">
                                                <button type="submit" id="harga" class="btn btn-info form-harga be btn-edit">     Ajukan
                                                </button>
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                    @elseif($data->status == 'finished')
                                    <div class="col-sm-4 offset-8">
                                        <a href="" class="btn btn-info be btn-edit">Lelang telah berakhir</a>
                                    </div>
                                    @endif 
                                </div>

                            @endif
                            
                    </div>
                </div>
            </div> --}}