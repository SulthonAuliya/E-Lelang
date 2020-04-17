@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-info collapsible" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Lelang Finished <p class="float-right">{{ $soldc }}</p></button>
      <div class="collapse" id="collapseExample">
        <div class="row">
            
            <div class="col-sm-12">
              <div class="card container card-lapor">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right">
                            {{ $sold->links() }}
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                <table class="table">
                  <thead class="thead text-center">
                    <tr>
                      <th scope="col">Username</th>
                      <th scope="col">Nama produk</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Detail</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($sold as $item)
                    <tr>
                      <th>{{ $item->user->name ?? ''}}</th>
                      <td>{{ $item->nama_barang }}</td>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->harga_awal }}</td>
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
        
      </div>
    </div>
  </div>

  <div class="row mt-1">
    <div class="col-sm-12">
      <button type="button" class="btn btn-success collapsible" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">Lelang Accepted <p class="float-right">{{ $accC }}</p></button>
      <div class="collapse" id="collapse2">
        <div class="row">
            
            <div class="col-sm-12">
              <div class="card container card-lapor">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right">
                            {{ $acc->links() }}
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                <table class="table">
                  <thead class="thead text-center">
                    <tr>
                      <th scope="col">username</th>
                      <th scope="col">Nama produk</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Detail</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($acc as $item)
                    <tr>
                      <th>{{ $item->user->name ?? ''}}</th>
                      <td>{{ $item->nama_barang }}</td>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->harga_awal }}</td>
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

      </div>
    </div>
  </div>

  <div class="row mt-1">
    <div class="col-sm-12">
      <button type="button" class="btn btn-danger collapsible" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">Lelang Pending <p class="float-right">{{ $pendingC }}</p></button>
      <div class="collapse" id="collapse3">
        <div class="row">
            
            <div class="col-sm-12">
              <div class="card container card-lapor">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right">
                            {{ $pending->links() }}
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                <table class="table">
                  <thead class="thead text-center">
                    <tr>
                      <th scope="col">username</th>
                      <th scope="col">Nama produk</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Detail</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($pending as $item)
                    <tr>
                      <th>{{ $item->user->name ?? ''}}</th>
                      <td>{{ $item->nama_barang }}</td>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->harga_awal }}</td>
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

      </div>
    </div>
  </div>
    
  
</div>

@endsection