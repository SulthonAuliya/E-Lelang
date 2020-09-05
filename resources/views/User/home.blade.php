@extends('layouts.app')

@section('content')
<div class="jumbotron jumbo-home">
    <div class="container">
        <div class="text-center">
            <h1 class="title"><b>e-lelang</b></h1>
            <h6 class="tagline">Lelang everything you want as simple as possible</h6>
        </div>
    </div>
</div>
<div class="container home">

    <div class="row ">
            @foreach ($barang as $item)
            <div class="col-sm-6 col-md-6 col-xl-4 mt-4">
                <a href="{{ route('e-lelang.show',$item->id_barang) }}" class="linked">
                    <div class="card card-barang ">
                        <div class="header">
                            <img class="card-img-top img-fluid img" src="{{ URL::to('/') }}/images/{{ $item->image }}" alt="">
                            <div class="col-sm-12 status">
                                <div class="float-right">
                                    @if($item->status == 'ongoing')
                                    <button class="btn bso">Sedang berlangsung</button>
                                    @else
                                    <button class="btn bsm">Belum dimulai</button>
                                    @endif
                                </div>
                                
                            </div> 
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2><b>{{ Str::limit($item->nama_barang, 23) }}</b></h2>
                                    </div>
                                    <div class="col-sm-12">
                                        <h3>Starting price</h3>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4><b>Rp.{{ number_format($item->harga_awal) }}</b></h4>
                                    </div>
                                </div>
                        </div>  
                    </div>
                </a>
            </div>
            @endforeach
        
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right">
                    {{ $barang->links() }}
                </div>
            </div>
        </div>
</div>
@endsection