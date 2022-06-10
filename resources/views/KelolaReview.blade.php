@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px;">{{ $title }}</h2>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">                        
                            <th scope="col">Nama User</th>
                            <th scope="col">Ulasan</th>
                            <th scope="col">Timestamp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>

                            <td>{{$row->id_question}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->categories}}</td>
                            <td>{{$row->desc}}</td>
                            
                            <td><a class="btn btn-sm btn-warning" href="{{url('/EditBantuan/'.$row->id_question)}}">Update</a>   <a class="btn btn-sm btn-danger" href="{{url('/DeleteBantuan/'.$row->id_question)}}">Delete</a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 @endsection