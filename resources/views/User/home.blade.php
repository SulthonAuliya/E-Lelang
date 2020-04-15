@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row ">
            @foreach ($barang as $item)
            <div class="col-sm-3 mt-4">
                <a href="{{ route('e-lelang.show',$item->id_barang) }}" class="linked">
                <div class="card cards card-hover">
                    <div class="header">
                        <img class="card-img-top img" src="{{ URL::to('/') }}/images/{{ $item->image }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3><b>{{ $item->nama_barang }}</b></h3>
                                </div>
                                <div class="col-sm-12">
                                    <h3><b>Starting price</b></h3>
                                </div>
                                <div class="col-sm-12">
                                    <h4>Rp.{{ $item->harga_awal }}</h4>
                                </div>
                                <div class="col-sm-12">
                                    <h4><b>Desc</b></h4>
                                </div>
                                <div class="col-sm-12">
                                    <h5>{{ Str::limit($item->desc,50) }}</h5>
                                </div>
                                
                            </div>
                        </div>
                      </div>  
                    <div class="card-footer">
                        <div class="row">
                           <div class="col-sm-12">
                                <div class="float-right">
                                    @if($item->status == 'ongoing')
                                    <h5 class="btn btn-success bso">Sedang berlangsung</h5>
                                    @else
                                    <h5 class="btn btn-danger bsm">Belum dimulai</h5>
                                    @endif
                                </div>
                                
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