@extends('partials.navbar2')

@section('content')
<h2 style="Margin-top:10px;">{{ $title }}</h2>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">                             
                                    <th scope="col">ID</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>  
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->role}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="{{url('/EditDataMitraUser/'.$row->id)}}">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection