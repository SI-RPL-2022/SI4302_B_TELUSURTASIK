@extends('partials.navbar2')

@section('content')
<h2 style="Margin-top:10px;">{{ $title }}</h2>

<div class="row">
  @foreach ($data as $row)
	<div class="col-md-4 col-sm-12 mb-3">
		<div class="card">
			<img src="{{asset('images/'.$row->picture)}}" style="height:250px" class="card-img-top" alt="{{$row->title}}">
 
			<div class="card-body">
				<div class="card-title"><h4>{{$row->title}}</h4></div>
				{{$row->desc}}
			</div>
 
			<div class="card-footer">
        	<a href="{{url('/EditDataWisata/'.$row->id_wisata)}}" class="btn btn-warning col-md-12 text-center">Menunggu</a>
			</div>
		</div>
	</div>
  @endforeach
</div>
@endsection




