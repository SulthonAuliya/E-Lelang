@extends('layouts.app')

@section('content')
<div class="container">
	
	<div class="card card-konfirm">
		<div class="container">

			<div class="row" style="margin-top: 5vh;">
				<div class="col-sm-3 offset-1">
					<h3>Name</h3>
				</div>
				<div class="col-sm-8">
					<h3>{{$data->name}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-1">
					<h3>Email</h3>
				</div>
				<div class="col-sm-8">
					<h3>{{$data->email}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-1">
					<h3>Alamat</h3>
				</div>
				<div class="col-sm-8">
					<h3>{{$data->alamat}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-1">
					<h3>No. Telpon</h3>
				</div>
				<div class="col-sm-8">
					<h3>{{$data->telp}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 offset-1">
					<h3>Status</h3>
				</div>
				<div class="col-sm-8">
				<form action="{{ route('regis.update',$data->id) }}" method="POST">
					@csrf
					@method('PUT')
					<input type="text" name="id" id="id" class="none" value="{{ $data->id }}">
					<input type="text" name="name" id="name" class="none" value="{{ $data->name }}">
					<input type="text" name="email" id="email" class="none" value="{{ $data->email }}">
					<input type="text" name="alamat" id="alamat" class="none" value="{{ $data->alamat }}">
					<input type="text" name="telp" id="telp" class="none" value="{{ $data->telp }}">
					<input type="text" name="passsword" id="password" class="none" value="{{ $data->password }}">
					<div class="row">
						
						@if($data->isAdmin == 1)
						<div class="col-sm-4">	
							<a class="btn white btn-info">Admin</a>
						</div>
						@elseif($data->isPetugas == 1)
						<div class="col-sm-4">		
							<a class="btn white btn-success">Petugas</a>
						</div>
						@elseif($data->isPetugas == 0 && $data->isAdmin == 0)
						<div class="col-sm-4">	
							<a class="btn white btn-danger">User</a>
						</div>
						@endif
						
						<div class="col-sm-2">
						<div class="form-group">
							<select name="credential" class="form-control" id="credential">
								<option value="user">User</option>
								<option value="admin">Admin</option>
								<option value="petugas">Petugas</option>
							</select>
						</div>
						</div><div class="col-sm-4">
						<button type="submit" class="btn btn-info">change</button></div>
					</div>
					
				</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection