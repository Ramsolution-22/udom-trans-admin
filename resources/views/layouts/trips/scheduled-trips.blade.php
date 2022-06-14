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
            <h1 class="m-0 text-dark">Scheduled Trips</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Scheduled Trips</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="row mx-auto col-12">
          <div class="card mx-auto col-lg-12">
            <div class="card-header">
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
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($scheduled_trips as $scheduled_trip)


                  <tr>
                    <td>{{$scheduled_trip->id}}</td>
                    <td>{{$scheduled_trip->rider->firstName}} {{$scheduled_trip->rider->lastName}}</td>
                    <td>{{$scheduled_trip->driver->firstName}} {{$scheduled_trip->driver->lastName}}</td>
                    <td><i class="fas fa-location-dot mx-1 text-danger"></i>{{$scheduled_trip->start_location->landmark_name}}  <br><i class="fas fa-location-dot mx-1 text-success"></i>
                      {{$scheduled_trip->end_location->landmark_name}}
                    </td>
                    <td>{{$scheduled_trip->created_at}}</td>
                    <td> {{$scheduled_trip->trip_start_time}} <br>
                    {{$scheduled_trip->trip_end_time}}
                    </td>
                    <td>{{$scheduled_trip->cab->type}}</td>
                    <td>{{$scheduled_trip->payment->amount}}</td>
                    <td>
                        @if ($scheduled_trip->status == "2")
                        <button class="btn btn-primary my-1">pending</button>
                        @endif
                    </td>
                    <td>
                     <a class="text-decoration-none" href="{{route('tripstatus', $scheduled_trip->id )}}">View details</a>
                      </td>

                  </tr>
                  @endforeach
                </tbody>

                </table>
                <div class="row my-2">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">{{$scheduled_trips->links()}}</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

      </section>
  </div>
@include('layouts.includes.footer')
@endsection
