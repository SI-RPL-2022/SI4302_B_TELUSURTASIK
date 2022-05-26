@extends('master')
@section('title', 'Wisata')

@section('content')
<div class="container">
    <div class="py-3 px-5">
        <div class="row mb-5">
            <div class="col-md-6" style="text-align: center">
                <img src="{{ asset('images/'. $wisata->picture) }}" class="rounded img-fluid" alt="gambar wisata" width="500"/>
            </div>
            <div class="col-md-6">
                <h4 class="font-weight-bold">{{ $wisata->title }}</h4>
                <i class="fa fa-map-marker"><h5 class="font-weight-bold">{{ $wisata->location }}</h5></i>
                <p class="py-3">
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                </p>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <a href="#" class="btn btn-success rounded btn-block">Berikan Ulasan</a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <a href="{{ $wisata->maps}}" class="btn btn-success rounded btn-block">Lihat Lokasi</a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <form action="{{ route('wishlist.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id_wisata" value="{{ $wisata->id_wisata }}">

                            @if ($isAlreadyWishlist)
                            <button class="btn btn-success rounded btn-block" type="submit">
                                Hapus Wishlist
                                <i class="fa fa-fw fa-heart"
                                style="color: red"></i>
                            </button>
                            @else
                            <button class="btn btn-success rounded btn-block" type="submit">
                                Tambah Wishlist
                                <i class="fa fa-fw fa-heart" style="color: white"></i>
                            </button>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p class="text-muted">{{ $wisata->desc }}</p>
            </div>
        </div>
    </div>
</div>
@endsection