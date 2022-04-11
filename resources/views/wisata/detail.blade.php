@extends('templates.master')
@section('title', 'Wisata')

@section('content')
<div class="py-3 px-5">
    <div class="row mb-5">
        <div class="col-md-6" style="text-align: center">
            <img src="{{ asset('assets/images/'. $wisata->picture) }}" class="rounded img-fluid" alt="gambar wisata" />
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-bold">{{ $wisata->title }}</h4>
            <h5 class="subheading">{{ $wisata->location }} <i class="far fa-fw fa-heart"></i></h5>
            <p class="py-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </p>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <a href="#" class="btn btn-success rounded btn-block">Berikan Ulasan</a>
                </div>
                <div class="col-md-4 mb-2">
                    <a href="#" class="btn btn-success rounded btn-block">Lihat Lokasi</a>
                </div>
                <div class="col-md-4 mb-2">
                    <a href="#" class="btn btn-success rounded btn-block">Tambah Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Deskripsi</h3>
            <p class="text-muted">{{ $wisata->desc }}</p>
        </div>
    </div>

    <h3 class="mb-3">Ulasan</h3>
    <div class="row mb-5">
        <div class="col-md-12">

            @foreach ($wisata->reviews as $review)
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">{{ $review->user->name }}</div>
                        <div class="p-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="p-2 text-muted">
                            {{ \Carbon\Carbon::parse($review->created_at)->isoFormat("D MMMM Y") }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $review->desc }}</p>
                    <a href="#" class="btn btn-primary">Reply</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection