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
              <h1 class="m-0 text-dark">Statement of <b class="text-primary"> {{$driver->firstName}} {{$driver->lastName}} </b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Drivers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <section class="content my-5">

    <div class="row my-10 mx-auto">
      <!-- small box -->
      <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$trips}}</h3>

          <p>Total No of Trips</p>
        </div>
        <div class="icon">
          <i class="ion ion-speedometer"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
      </div>


<div class="col-lg-3 col-6">

   <div class="small-box bg-danger">
    <div class="inner">
      <h3>{{$cancelled_trips}}</h3>

      <p>Cancelled Trips</p>
    </div>
    <div class="icon">
      <i class="ion ion-close-circled"></i>
    </div>
    {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
   </div>
    </div>
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-primary">
<div class="inner">
<h3>{{$scheduled_trips}}</h3>

<p>Scheduled Trips </p>
</div>
<div class="icon">
<i class="ion ion-clock"></i>
</div>
{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
</div>
</div>
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-success">
<div class="inner">
<h3>{{$completed_trips}}</h3>

<p>Complete Trips</p>
</div>
<div class="icon">
<i class="ion ion-checkmark-circled"></i>
</div>
{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
</div>
</div>
</div>
  </section>
  <section class="content">
    <div class="row mx-auto">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
              <a href="/drivers">

                  <button class="btn btn-default mt-2 mx-4">
                      <i class="nav-icon fas fa-angle-double-left"></i>
                      Back</button>
                    </a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th>Trip Id</th>
                      <th>Picked Up</th>
                      <th>Dropped</th>
                      <th>Date On</th>
                      <th>Earned</th>
                      <th>Status</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($allTrips as $trip )

                        <tr>
                            <td>{{$trip->id}}</td>
                            <td>{{$trip->start_location->landmark_name}}</td>
                            <td>{{$trip->end_location->landmark_name}}</td>
                            <td>{{$trip->created_at}}</td>
                            <td>{{$trip->payment->amount}}</td>
                            <td>
                                @if ($trip->status == '0')
                                <button class="btn btn-danger">Cancelled</button>
                               @elseif ($trip->status == '1')
                               <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-primary">Pending</button></td>
                            @endif
                            </td>
                            <td>
                           <a href="{{route('tripstatus', $trip->id )}}">View details</a>
                          </td>

                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                </div>
                </div>
                </div>
                </div>
  </section>
</div>
@include('layouts.includes.footer')
@endsection
