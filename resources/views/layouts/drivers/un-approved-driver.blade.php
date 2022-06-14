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
            <h1 class="m-0 text-dark">Un-approved Driver</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Un-approved Driver</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
      <div class="container-fluid">


  <section class="content">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-default mt-2 mx-4">
                  <i class="nav-icon fas fa-angle-double-left"></i>
                  Back</button>

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
                <table id="example2" class="table table-bordered table-striped">
                  <thead>

                    <tr>
                      <th>No</th>
                      <th>Rider Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>City</th>
                      <th>Offline / Online</th>
                      <th>Status</th>
                      <th>Other Action</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sir Humbi</td>
                        <td>humbi@gmail.com</td>
                        <td>0756234509</td>
                        <td>Dodoma</td>
                        <td><button class="btn btn-danger">Offline</button>
                        </td>
                        <td>
                             <a href="/driver-status">
                                <button class="btn btn-warning">Pending</button>
                             </a>
                            </td>
                        <td>
                            <button class="btn btn-info mx-2">Ride History</button>
                           <a href="/driver-statement">
                               <button class="btn btn-warning">statement</button>
                            </a>
                            <!-- <button class="btn btn-primary">Document List</button> -->
                        </td>
                        <td>
                        <button class="btn btn-danger ">
                          <i class="nav-icon fas fa-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sir Humbi</td>
                        <td>humbi@gmail.com</td>
                        <td>0756234509</td>
                        <td>Dodoma</td>
                        <td><button class="btn btn-success">Online</button>
                        </td>

                        <td>
                                <a href="/driver-status">
                                <button class="btn btn-warning">Pending</button>
                            </a>
                            </td>
                        <td>
                            <button class="btn btn-info mx-2">Ride History</button>
                            <a href="/driver-statement">
                                <button class="btn btn-warning ">Statement</button>
                            </a>
                        </td>
                        <td>
                          <button class="btn btn-danger">
                            <i class="nav-icon fas fa-trash"></i>
                          </button>
                        </td>
                    </tr>
                  </tbody>

                  </table>
                </div>
        </div>
        </div>
        </div>
</section>
      </div>


  </div>
@include('layouts.includes.footer')
@endsection
