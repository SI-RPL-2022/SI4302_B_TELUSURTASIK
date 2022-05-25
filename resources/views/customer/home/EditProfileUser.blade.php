@extends('master')
@section('home')
active
@endsection

@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="">Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      
      <div class="col-md-3">
        <div class="text-center">
          <img src="" width="200" height="200" class="img-circle img-thumbnail" alt="Photo Profile">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
   
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if(session()->has('message'))
          <div class="alert alert-info alert-dismissable text-green-600 mb-4">{{ session()->get('message') }}</div>
        @endif
        <h3 class="text-center">My Profile</h3>
        
        <form class="form-horizontal" role="form" method="post" action="/ProfileUserUpdate/{{$user->id}}">
        <!-- {{ csrf_field() }}] -->
        @method('put')
        @csrf 
          <div class="form-group">
            <label class="col-lg-3 control-label" for="email">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="email" type="text" name="email" value="{{old('name', Auth::user()->email)}}" readonly>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="name">Name</label>
            <div class="col-lg-8">
              <input class="form-control" id="name" type="text" name="name" value="{{old('name', Auth::user()->name)}}" required>
            </div>
          </div>  
            
          <div class="form-group">
            <label class="col-lg-3 control-label" for="no HP">No HP</label>
            <div class="col-lg-8">
              <input class="form-control" id="no HP" type="number" name="no_hp" value="{{old('no_hp', Auth::user()->no_hp)}}" required>
            </div>
          </div>
          <br>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-warning col-12 btn-sm">Submit</button>
            <a href="/editPasswordUser" class="btn btn-danger col-12 btn-sm">Edit Password</a>
          </div>  
        </form>
        
        
      </div>
      
  </div>
</div>
<hr>
@endsection
