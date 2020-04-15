@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-create">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <h2><b>Ajukan Tawaran Anda!</b></h2>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('createProduct') }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf 
                        <div class="row" style="margin-top: 5vh;">
                            <div class="col-sm-4 image ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="img_input" class="label_img ">
                                            <img src="{{ asset('images/upload.png') }}" alt="your image" id="disp_img">
                                        </label>
                                        <input id="img_input" type="file" name="image" onchange="readURL(this);" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                
                                    
                                    <div class="row form-group none">
                                        <div class="col-sm-12">
                                            <input type="text" id="id" name="id" value="{{ auth()->user()->id  }}" class="form-control" placeholder="Harga Awal">
                                        </div>
                                    </div>
                                    <div class="row form-group">

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" required autocomplete="off" placeholder="Masukan Nama Barang Anda" autofocus>

                                            @error('nama_barang')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control @error('harga_awal') is-invalid @enderror" id="harga_awal" name="harga_awal" required autocomplete="off" placeholder="Masukan harga Awal" autofocus>

                                            @error('harga_awal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror" placeholder="Masukan deskripsi barang anda"></textarea>
                                            @error('desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group none">
                                        <div class="col-sm-12">
                                            <input type="text" id="tgl" name="tgl" value="{{ $tgl->toDateString() }}" class="form-control" placeholder="Harga Awal">
                                        </div>
                                    </div>
                                    <div class="row form-group none">
                                        <div class="col-sm-12">
                                            <input type="text" id="status" name="status"          value="{{ $status }}" class="form-control" placeholder="Harga Awal">
                                        </div>
                                    </div>
                                    <div class=" form-group row mb-0">
                                        <div class="col-sm-3 offset-sm-9" style="margin-bottom: 5vh;">
                                            <button type="submit" class="btn btnc btn-primary">
                                                <b>Submit</b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#disp_img')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection 