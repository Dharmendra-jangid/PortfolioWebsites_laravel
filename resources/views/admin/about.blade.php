@extends('adminlayout.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">About Add </h2>
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
                            <div class="title"><strong class="d-block">About Add </strong></div>
                            <div class="block-body">
                                <form action="{{route('admins.addAbout',$about->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" placeholder="Enter Name" value="{{$about->name}}" class="form-control"
                                            @error('name') is-invalid @enderror name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">D.O.B</label>
                                        <input type="date" placeholder="Enter Name" value="{{$about->Date}}" class="form-control"
                                            @error('name') is-invalid @enderror name="date">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" placeholder="Title" value="{{$about->title}}" class="form-control"
                                            @error('title') is-invalid @enderror name="title">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Title-2</label>
                                        <input type="text" placeholder="Title" class="form-control"
                                            @error('title2') is-invalid @enderror value="{{$about->title2}}" name="title2">
                                        @error('title2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" placeholder="Enter Address" class="form-control"
                                            @error('address') is-invalid @enderror value="{{$about->address}}" name="address">
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Pincode</label>
                                        <input type="text" placeholder="Enter Pincode" class="form-control"
                                            @error('pincode') is-invalid @enderror value="{{$about->pincode}}" name="pincode">
                                        @error('pincode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="text" placeholder="Enter Email" class="form-control"
                                            @error('email') is-invalid @enderror value="{{$about->email}}" name="email">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" placeholder="Enter Phone" class="form-control"
                                            @error('phone') is-invalid @enderror value="{{$about->phone}}" name="phone">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" class="form-control" value="{{$about->image}}" name="image">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Image-2</label>
                                        <input type="file" class="form-control" value="{{$about->image1}}" name="image1">
                                        @error('image1')
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
                        <li class="breadcrumb-item active"> Banner </li>
                    </ul>
                </div>
                <section class="no-padding-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block margin-bottom-sm">
                                    <div class="title"><strong>Banner Table</strong></div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th> image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($banner as $index => $banners) --}}
                                                <tr>

                                                    {{-- /<td>{{$index+1}}</td> --}}
                                                    {{-- <td>{{$banners->name}}</td> --}}
                                                    {{-- <td><img width="50px" height="50px" src="{{asset('banner/'.$banners->image)}}" alt=""></td> --}}

                                                    <td>

                                                        {{-- <a href="{{route('admins.deleteBanner',$banners->id)}}" class="btn btn-danger">Delete</a> --}}
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
