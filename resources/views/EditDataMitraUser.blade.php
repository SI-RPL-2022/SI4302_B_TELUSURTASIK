@extends('partials.navbar2')

@section('content')
<h1>{{$title}}</h1>
<form style="margin-top:20px">
  <div class="form-group">
    <label for="">Edit Profile Picture</label>
    <input type="file" class="form-control-file" id="">
  </div>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Ini nanti isi yang ada di database">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="1" aria-describedby="" placeholder="Ini nanti isi yang ada di database">
  </div>
  <div class="form-group">
    <label for="">No HP</label>
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Ini nanti isi yang ada di database">
  </div>
   
  <a href="{{url('/DataWisata')}}" class="btn btn-primary col-md-12 text-center" style="margin-top:20px">Submit</a>
</form>
@endsection