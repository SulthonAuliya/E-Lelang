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
                      <th scope="col">username</th>
                      <th scope="col">Nama produk</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Detail</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($barang as $item)
                    <tr>
                      <th>{{ $item->user->name ?? ''}}</th>
                      <td>{{ $item->nama_barang }}</td>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->harga_awal }}</td>
                      <form action="{{ route('e-lelang.edit',$item->id_barang) }}" method="POST">
                      <td><a href="{{ route('e-lelang.show',$item->id_barang) }}" class="btn btn-info">Detail</a></td>
                      @if ($item->status == 'accepted')
                      <td>
                        <a href="{{ route('admin.edit',$item->id_barang) }}" class="btn btn-success">{{ $item->status }}</a>
                      </td>
                      @elseif ($item->status == 'pending')
                      <td>
                        <a href="{{ route('admin.edit',$item->id_barang) }}" class="btn btn-danger">{{ $item->status }}</a>
                      </td>
                      @elseif ($item->status == 'finished')
                      <td>
                        <a href="" class="btn btn-info">{{ $item->status }}</a>
                      </td>
                      @elseif ($item->status == 'ongoing')
                      <td>
                        <a href="{{ route('admin.edit',$item->id_barang) }}" class="btn btn-info">{{ $item->status }}</a>
                      </td>
                      @endif
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
                    {{ $barang->links() }}
                </div>
            </div>
        </div>
</div>
@endsection