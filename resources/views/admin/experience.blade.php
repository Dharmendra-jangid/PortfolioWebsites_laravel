@extends('adminlayout.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Experience </h2>
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
                                <form action="{{route('admins.addexperience')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label"> Conpany Name</label>
                                        <input type="text" placeholder="Enter Name" class="form-control"
                                            @error('name') is-invalid @enderror name="name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">tile</label>
                                      <textarea name="tile"  id="editor"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Description</label>
                                      <textarea name="description"  id="editor1"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Time-Duration</label>
                                        <input type="text" placeholder="Title" class="form-control"
                                            @error('time') is-invalid @enderror name="time">
                                        @error('time')
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
                                                    <th> title</th>
                                                    <th> Description</th>
                                                    <th>Time-Duration</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach ($experience as $index => $experiences)
                                                <tr>

                                                    <td>{{$index+1}}</td>
                                                    <td>{{$experiences->name}}</td>
                                                     <td><textarea >@php echo $experiences->tile  @endphp</textarea></td>
                                                     <td><textarea >@php echo $experiences->description @endphp</textarea></td>
                                                     <td>{{$experiences->time}}</td>

                                                    <td>

                                                      <a href="{{route('admins.delete',$experiences->id)}}" class="btn btn-danger">Delete</a>                                               </td>
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
