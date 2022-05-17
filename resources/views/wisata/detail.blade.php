@extends('master')
@section('title', 'Wisata')

@section('content')
<div class="container">
    <div class="py-3 px-5">
        <div class="row mb-5">
            <div class="col-md-6" style="text-align: center">
                <img src="{{ asset('images/'. $data->picture) }}" class="rounded img-fluid" alt="gambar wisata" width="500"/>
            </div>
            <div class="col-md-6">
                <h4 class="font-weight-bold">{{ $data->title }}</h4>
                <i class="fa fa-map-marker"><h5 class="font-weight-bold">{{ $data->location }}</h5></i>
                {{-- <p class="py-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p> --}}
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <a href="#" class="btn btn-success rounded btn-block">Berikan Ulasan</a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="{{ $data->maps}}" class="btn btn-success rounded btn-block">Lihat Lokasi</a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="#" class="btn btn-success rounded btn-block">Tambah Wishlist<i class="fa fa-fw fa-heart" style="color: red"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p class="text-muted">{{ $data->desc }}</p>
            </div>
        </div>
    </div>
</div>
@endsection