@extends('adminlayout.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Skil </h2>
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
                                <form action="{{route('admins.addskil')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label">Skill Name</label>
                                        <input type="text" placeholder="Enter Name" class="form-control"
                                            @error('name') is-invalid @enderror name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Progress bar</label>
                                        <input type="text" placeholder="Enter Value" class="form-control"
                                            @error('tile') is-invalid @enderror name="progressbar">
                                        @error('natileme')
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
                        <li class="breadcrumb-item active"> Skills </li>
                    </ul>
                </div>
                <section class="no-padding-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block margin-bottom-sm">
                                    <div class="title"><strong>Skills Table</strong></div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th> Progress Bar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($skill as $index => $skills)
                                                <tr>

                                                    <td>{{$index+1}}</td>
                                                    <td>{{$skills->name}}</td>
                                                    <td>{{$skills->progressbar}}</td>
                                                     <td>

                                                        <a href="{{route('admins.deleteSkill',$skills->id)}}" class="btn btn-danger">Delete</a>
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
