@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cancelled Trips</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Cancelled Trips</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="row mx-auto col-12">
          <div class="card mx-auto col-lg-12">
            <div class="card-header dark">
                <a href="/trips">
                    <button class="btn btn-default">
                        <i class="nav-icon fas fa-angle-double-left"></i>
                        Back</button>
                    </a>

            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Trip Id</th>
                  <th>Rider Name</th>
                  <th>Driver Name</th>
                  <th>Pick/ Drop Address</th>
                  <th>Date</th>
                  <th>Pick/ Drop Time</th>
                  <th>Vehicle Type</th>
                  <th>Price</th>
                  <th>Cancelled By</th>
                  <th>Cancel Reason</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($cancelled_trips as $cancelled_trip )
                    <tr>
                      <td>{{$cancelled_trip->id}}</td>
                      <td>{{$cancelled_trip->rider->firstName}} {{$cancelled_trip->rider->lastName}}</td>
                      <td>{{$cancelled_trip->driver->firstName}} {{$cancelled_trip->driver->lastName}}</td>
                      <td><i class="fas fa-location-dot mx-1 text-danger"></i>{{$cancelled_trip->start_location->landmark_name}} <br> <i class="fas fa-location-dot mx-1 text-success"></i>
                        {{$cancelled_trip->end_location->landmark_name}}
                      </td>
                      <td>{{$cancelled_trip->created_at}} </td>
                      <td>{{$cancelled_trip->trip_start_time}} <br>
                        {{$cancelled_trip->trip_end_time}}</td>
                      <td>{{$cancelled_trip->cab->type}}</td>
                      <td>{{$cancelled_trip->payment->amount}}</td>
                      <td>By driver</td>
                      <td>---</td>
                      <td>
                          @if ($cancelled_trip->status == "1")
                          <button class="btn btn-success  my-1">Completed</button>
                      <br> <a href="#">View invoice</a>
                          @else
                          <button class="btn btn-danger  my-1">Cancelled</button>
                          @endif
                        </td>
                        <td>
                         <a class="text-decoration-none" href="{{route('tripstatus', $cancelled_trip->id )}}">View details</a>
                        </td>



                    </tr>
                    @endforeach
                </tbody>

                </table>
                <div class="row my-2">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">{{$cancelled_trips->links()}}</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

      </section>
  </div>
@include('layouts.includes.footer')
@endsection
