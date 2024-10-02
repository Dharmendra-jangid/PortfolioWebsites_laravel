@extends('adminlayout.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Project </h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>

            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong class="d-block">   </strong></div>
                            <div class="block-body">
                                <form action="{{route('admins.addproject')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label"> Branding Name</label>
                                        <input type="text" placeholder="Enter Name" class="form-control"
                                            @error('name') is-invalid @enderror name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Designing Name</label>
                                        <input type="text" placeholder="Enter Designing Name" class="form-control"
                                            @error('tile') is-invalid @enderror name="desinname">
                                        @error('natileme')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Project Image</label>
                                        <input type="file" placeholder="image" class="form-control"
                                            @error('image') is-invalid @enderror name="image">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- Breadcrumb-->
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Project </li>
                    </ul>
                </div>
                <section class="no-padding-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block margin-bottom-sm">
                                    <div class="title"><strong>Project Table</strong></div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Branding Name</th>
                                                    <th> Designing Name</th>
                                                    <th> Project Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($project as $index => $projects)
                                                <tr>

                                                    <td>{{$index+1}}</td>
                                                    <td>{{$projects->name}}</td>
                                                    <td>{{$projects->desinname}}</td>
                                                    <td><img width="50px" height="50px" src="{{asset('projects/'.$projects->image)}}" alt=""></td>

                                                    <td>

                                                        <a href="{{route('admins.deleteProject',$projects->id)}}" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
