@extends('partials.navbar2')

@section('content')
<h1>{{$title}}</h1>

<form style="margin-top:20px">
  <div class="form-group">
    <label for="">Edit Gambar</label>
    <input type="file" class="form-control-file" id="">
  </div>
  <div class="form-group">
    <label for="">Title</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Ini nanti isi yang ada di database">
  </div>
  <div class="form-group">
      <label for="">Kategori</label>
      <select id="" class="form-control">
        <option selected>Ini nanti isi yang ada di database</option>
        <option>Curug</option>
		<option>Pantai</option>
		<option>Pemandangan</option>
      </select>
  </div>
  <div class="form-group">
    <label for="">Location</label>
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Ini nanti isi yang ada di database">
  </div>
  <div class="form-group">
    <label for="">Deskripsi</label>
    <textarea class="form-control" id="" rows="3" placeholder="Ini nanti isi yang ada di database"></textarea>
  </div>
  
  <div class="form-group">
      <label for="">Status</label>
      <select id="" class="form-control">
        <option selected>Ini nanti isi yang ada di database(Pending)</option>
        <option>Accepted</option>
      </select>
  </div>
  
  <a href="{{url('/DataWisata')}}" class="btn btn-primary col-md-12 text-center" style="margin-top:20px">Submit</a>
</form>
@endsection