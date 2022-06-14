@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Trips</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Trips</li>
            </ol>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="row mx-auto col-12">
          <div class="card mx-auto col-lg-12">
            <div class="card-header">
                <button class="btn btn-default">
                    <i class="nav-icon fas fa-angle-double-left"></i>
                    Back</button>

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
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip )
                    <tr>
                      <td>{{$trip->id}}</td>
                      <td>{{$trip->rider->firstName}} {{$trip->rider->lastName}}</td>
                      <td>{{$trip->driver->firstName}} {{$trip->driver->lastName}}</td>
                      <td><i class="fas fa-location-dot mx-1 text-danger"></i>{{$trip->start_location->landmark_name}} <br><i class="fas fa-location-dot mx-1 text-success"></i>
                        {{$trip->end_location->landmark_name}}
                      </td>
                      <td>{{$trip->created_at}} </td>
                      <td>{{$trip->trip_start_time}} <br>
                        {{$trip->trip_end_time}}</td>
                      <td>{{$trip->cab->type}}</td>
                      <td>{{$trip->payment->amount}}</td>

                      <td>
                          @if ($trip->status == "1")
                          <button class="btn btn-success  my-1">Completed</button>
                          @elseif ($trip->status == "2")
                          <button class="btn btn-primary  my-1">Pending</button>
                          @else
                          <button class="btn btn-danger  my-1">Cancelled</button>

                          @endif
                  </td>
                  <td>
                      <a class="text-decoration-none" href="{{route('tripstatus', $trip->id )}}">View details</a>

                  </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="row my-2">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">{{$trips->links()}}</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

      </section>
    </div>
    </div>
@include('layouts.includes.footer')
@endsection

