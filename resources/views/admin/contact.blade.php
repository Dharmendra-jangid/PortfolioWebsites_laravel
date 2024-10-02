@extends('adminlayout.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Contact </h2>
            </div>
        </div>
        <!-- Breadcrumb-->

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->


                </div>
                <!-- Breadcrumb-->
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Contact </li>
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
                                                    <th>Name</th>
                                                    <th> Email</th>
                                                    <th> Mobil</th>
                                                    <th> Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contact as $index => $contacts)
                                                <tr>

                                                    <td>{{$index+1}}</td>
                                                    <td>{{$contacts->name}}</td>
                                                    <td>{{$contacts->email}}</td>
                                                    <td>{{$contacts->phone}}</td>
                                                    <td><textarea >{{$contacts->message}}</textarea></td>

                                                    <td>
                                                    <a href="https://wa.me/{{$contacts->phone}}/?text="><img src="{{asset('')}}image/whatsapp.png" class="whatsapplogo" alt=""></a>
                                                        <a href="{{route('admin.deleteContact',$contacts->id)}}" class="btn btn-danger">Delete</a>
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
