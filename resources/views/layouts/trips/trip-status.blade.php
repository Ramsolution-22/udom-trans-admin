@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Trip Status </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Trip Status</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
        <div class="row mx-1">
            <div class="card mx-auto col-lg-12">
                <div class="card-header">
                    <a href="/trips">
                    <button class="btn btn-default">
                            <i class="nav-icon fas fa-angle-double-left"></i>
                            Back
                        </button>
                    </a>
                </div>
                <div class="card-body">

                    <div class="row mx-auto">
                        <div class="col-6">
                        <div class="card">
                            <table class="table">
                                <tr>
                                    <th>Trip Id</th>
                                    <td>{{$trip->id }}</td>
                                </tr>
                                <tr>
                                  <th>Rider Name</th>
                                  <td>{{$trip->rider->firstName}} {{$trip->rider->lastName}}</td>
                              </tr>
                              <tr>
                                  <th>Driver Name</th>
                                  <td>{{$trip->driver->firstName}} {{$trip->driver->lastName}}</td>
                              </tr>
                              <tr>
                                  <th>Pick / Drop Address</th>
                                  <td><i class="fas fa-location-dot mx-1 text-danger"></i>{{$trip->start_location->landmark_name}} <strong>/</strong> <i class="fas fa-location-dot mx-1 text-success"></i>{{$trip->end_location->landmark_name}}</td>
                              </tr>
                              <tr>
                                  <th>Vehicle Type</th>
                                  <td>{{$trip->cab->type}}</td>
                              </tr>
                              <tr>
                                @if ($trip->status == '0')
                                  <th>Cancelled By</th>
                                  <td>User</td>
                                  @endif
                              </tr>
                              <tr>
                                  @if ($trip->status == '0')
                                  <th>Cancel Reason</th>
                                  <td>

                                      No</td>
                                      @endif
                              </tr>
                              <tr>
                                  <th>Ride Fare</th>
                                  <td>{{$trip->payment->amount}}</td>
                              </tr>

                              <tr>
                                  <th>Payment Status</th>
                                  <td>
                                    @if ($trip->status == '1')
                                    Paid
                                    @elseif ($trip->status == '2')
                                    Not Paid
                                    @else
                                    Not paid
                                    @endif

                                </td>
                              </tr>
                              <tr>
                                  <th>Trip Status</th>
                                  <td>
                                    @if ($trip->status == '1')
                                    <button class="btn btn-success">Completed</button>
                                    @elseif ($trip->status == '2')
                                    <button class="btn btn-primary">Pending</button>
                                        @else
                                      <button class="btn btn-danger">Cancelled</button>
                                      @endif
                                    </td>

                              </tr>

                            </table>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="card elevation-0 rounded">
                          <div class="">
                              <div class="">
                          <iframe src="https://maps.google.com/maps?q=university%20of%20san%dodoma&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                            frameborder="0"
                            scrolling="no" style="width: 100%; height: 60vh;"></iframe>
                            <a href="https://fnftest.net" style="display:none">fnf test</a>

                                    </div>
                                  </div>
                        </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.includes.footer')
@endsection
