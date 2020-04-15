@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
            
            <div class="col-sm-12">
              <div class="card container card-konfirm">
                <div class="row">
                  <div class="col-sm-8">
                    <a href="{{ route('regis.index') }}" class="btn btn-info">refresh</a>
                  </div>
                  <div class="col-sm-4">
                    <form action="{{ route('cari') }}" method="GET">
                      <input type="text" name="cari" class="cari form-control" placeholder="Search .." value="{{ old('cari') }}">
                    </form>
                  </div>
                </div>
                <div class="wrappers">
                <table class="table">
                  <thead class="thead text-center">
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th>Alamat</th>
                      <th>No. Telpon</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($user as $item)
                    <tr>
                   
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->telp }}</td>
                      <form action="{{ route('regis.destroy',$item->id) }}" method="POST">
                        @csrf
                      <td>
                        <input type="text" name="id" value="{{ $item->id }}" class="none">
                        @if($item->isAdmin == '1')
                        <button class="btn-info btn">Admin</button>
                        @elseif ($item->isPetugas == '1')
                        <button class="btn-success btn">Petugas</button>
                        @elseif (empty($item->isAdmin) && empty($item->isPetugas))
                        <button class="btn-danger btn">User</button>
                        @endif
                      </td>
                      <td><a href="{{ route('regis.edit',$item->id) }}" class="btn btn-info">Change</a>
                      <button type="submit" class="btn btn-danger none">Delete</button></td>
                      </form>
                    </tr> 
                    @endforeach
                    
                  </tbody> 
                </table>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right">
                            {{ $user->links() }}
                        </div>
                    </div>
                </div>

              </div>
            </div>
            
        
        </div>
        
</div>
@endsection