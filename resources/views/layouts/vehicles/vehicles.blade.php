@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vehicle Type</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vehicle Type</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <button class="btn btn-primary mt-2">Add Vehicle</button>
                  <a href="/home">
                    <button class="btn btn-default mt-2 mx-4">
                        <i class="nav-icon fas fa-angle-double-left"></i>
                        Back</button>
                    </a>

                  <div class="card-tools">
                    <div class="input-group input-group-sm mt-5" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right " placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default "><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <thead>

                        <tr>
                          <th>Id</th>
                          <th>Vehicle Type</th>
                          <th>Vehicle Color</th>
                          <th>Vehicle Name</th>
                          <th>Plate Number</th>
                          <th>Vehicle Image</th>
                          <th>Status</th>
                          <th>Action</th>
                       </tr>
                      </thead>
                      <tbody>
                          @foreach ($cabs as $cab)


                        <tr>
                            <td>{{$cab->id}}</td>
                            <td>{{$cab->type}}</td>
                            <td>{{$cab->color}}</td>
                            <td>{{$cab->model}}</td>
                            <td>{{$cab->Plate_number}}</td>
                            <td>{{$cab->picture}}</td>
                            <td>On</td>
                            <td><button class="btn btn-primary">
                              <i class="nav-icon fas fa-edit"></i>
                            </button>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row my-2">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">{{$cabs->links()}}</li>
                        </ul>
                    </div>

                </div>
            </div>
            </div>
            </div>
    </section>
  </div>
@include('layouts.includes.footer')
@endsection
