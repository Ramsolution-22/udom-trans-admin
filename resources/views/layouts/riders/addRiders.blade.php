@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Riders</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Riders</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<section class="content">
    <div class="row mx-auto">

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="/riders">

                <button class="btn btn-default mt-2 mx-4">
                    <i class="nav-icon fas fa-angle-double-left"></i>
                    Back</button>
                </a>
                </div>
                <div class="card-body">
                  <form role="form" id="quickForm">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter FullName">
                      </div>
                      <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter FullName">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="email">Contact Number</label>
                        <input type="tel" name="contactNo" class="form-control" id="contactNo" placeholder="Enter Contact Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="password" class="form-control" id="Password1" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Profile Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
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

