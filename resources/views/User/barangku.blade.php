@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
            
            <div class="col-sm-12">
              <div class="card container card-konfirm">
                <div class="wrapper">
                <table class="table">
                  <thead class="thead text-center">
                    <tr>
                      <th scope="col">Nama barang</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Detail</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($barangku->where('user_id', auth()->user()->id) as $item)
                    <tr>
                   
                      <td>{{ $item->barang->nama_barang }}</td>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->harga_akhir }}</td>
                      <form action="{{ route('e-lelang.edit',$item->id_barang) }}" method="POST">
                      <td><a href="{{ route('e-lelang.show',$item->id_barang) }}" class="btn btn-info">Detail</a></td>
                      </form>
                    </tr> 
                    @endforeach
                  </tbody>
                </table>
               </div>
              </div>
            </div>
            
        
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right">
                    {{ $barangku->links() }}
                </div>
            </div>
        </div>
</div>
@endsection