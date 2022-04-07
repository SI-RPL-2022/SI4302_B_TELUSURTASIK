@extends('partials.navbar2')

@section('content')
<h2 style="Margin-top:10px;">Data Mitra</h2>
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
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No HP</th>
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>0001</td>
                                    <td>Yanharr Alfirazi</td>
                                    <td>afyanharr34@gmail.com</td>
                                    <td>081234567890</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    
                                    <td>0002</td>
                                    <td>Tasya Lu'lu</td>
                                    <td>Tasyalaw@gmail.com</td>
                                    <td>081234567890</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    
                                    <td>0003</td>
                                    <td>Denayu Tiara</td>
                                    <td>denayu@gmail.com</td>
                                    <td>081234567890</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    
                                    <td>0004</td>
                                    <td>Septia Mutiara</td>
                                    <td>septiamutiara@gmail.com</td>
                                    <td>081234567890</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    
                                    <td>0005</td>
                                    <td>Rahma Karina</td>
                                    <td>rahmakarina@gmail.com</td>
                                    <td>081234567890</td>
                                    
                                    <td><a class="btn btn-sm btn-warning" href="">Update</a>   <a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection