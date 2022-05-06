@extends('master')
@section('title', 'Wisata')

@section('content')
{{-- <section id="courses"> --}}
<div style="background: #def0dd; margin-left: 30px; margin-right: 30px;">
    <div class="container">
        <div class="row">
            <div class="d-flex mb-4">
                <div class="mr-auto">
                    <form action="{{ route('wisata.index') }}" method="GET">
                        @csrf
                        <div class="searchbox rounded" style="margin-top: 10px">
                            <input type="text" name="search" style="height=20px;" class="form-control rounded" placeholder="Cari Wisata Disini" aria-label="Search" value="{{request('search')}}"/>
                                <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="courses-price1" style="margin-top: 20px">
                    <button type="button" class="btn btn-secondary btn-sm text-white" style="background-color:#FBB667;">
                        <a class="nav-link active" aria-current="page" href="" >My Wishlist<i class="fa fa-fw fa-heart" style="color: red"></i></a>
                    </button>
                </div>
            </div>
            <div>
                <form action="/kategoriWisata" method="post">
                    @csrf
                    <div class="input-group">
                        <select name="searchCategory" class="custom-select" id="inputGroupSelect04"aria-label="Example select with button addon">
                            <option selected value="All">Choose Category...</option>
                            <option value="Curug">Curug</option>
                            <option value="Pantai">Pantai</option>
                            <option value="Danau">Danau</option>
                            <option value="Coffee">Caffee</option>
                            <option value="Wisata Budaya">Wisata Budaya</option>
                            <option value="Taman">Taman</option>
                        </select>
                        <button class="button" type="submit"tyle="box-sizing: ">Lihat</button>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="section-title2">
                    <h2>Wisata <small>Choose place you want to go</small></h2>
                </div>
            </div>
            <div class="row">
                    @foreach ($data as $wisata)
                    <div class="col-md-4 col-sm-4">
                        <div class="card" style="height: 100%">
                            <img class="card-img-top" src="{{ asset('images/'. $wisata->picture) }}"
                                alt="tempat wisata" height="200" style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $wisata->title }} </h5>
                                <p class="card-text">{{ $wisata->desc }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('wisata.show', $wisata->id_wisata) }}"
                                    class="btn btn-success btn-block">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> 

            <!-- pagination -->
                <div class="pagination justify-content-center mt-5">
                {{-- {{$wisata -> links()}} --}}
                </div>
        </div>
    </div>
</section>           
@endsection