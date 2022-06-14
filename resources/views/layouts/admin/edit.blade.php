@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Editing <b class="text-primary">{{$user->name}}'s</b> details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Admin</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<section class="content">
    <div class="row mx-auto">

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="/admin">

                <button class="btn btn-default mt-2 mx-4">
                    <i class="nav-icon fas fa-angle-double-left"></i>
                    Back</button>
                </a>
                </div>
                <div class="card-body">
                    @include('layouts.includes.alert')
                  <form role="form" id="quickForm" method="POST" action="{{route('updateuser', $user->id)}}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="adminName">Admin Name</label>
                        <input type="text" name="adminName" class="form-control" id="adminName" value="{{$user->name}}" placeholder="Enter FullName">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" value="{{$user->password}}" id="Password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="password" class="form-control" id="Password1" value="{{$user->password}}" placeholder="Confirm Password">
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                      <button type="submit" class="btn btn-primary">Save</button>


                      <button class="btn btn-secondary mx-4">Reset</button>
                    </div>
                  </form>
                </div>
                </div>
                </div>
                </div>
            </div>
  </section>
@include('layouts.includes.footer')
@endsection
