@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">History of <strong class="text-primary">{{$driver->firstName}} {{$driver->lastName}}</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Trips History</li>
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
                  <a href="/drivers">

                      <button class="btn btn-default">
                          <i class="nav-icon fas fa-angle-double-left "></i>
                          Back
                        </button>
                    </a>
                </div>

                <div class="card-body">

                    <div class="row ">
                        @foreach ($trips as $trip )
                        <div class="col-6 d-inline">
                            <div class="card ">

                                    <table class="table">
                                        <tr class="bg-primary">
                                            <th>Trip Id</th>
                                            <td>{{$trip->id }}</td>
                                        </tr>
                                        <tr>
                                          <th>Rider Name</th>
                                          <td>{{$trip->rider->firstName}} {{$trip->rider->lastName}}</td>
                                      </tr>
                                      <tr>
                                          <th>Date</th>
                                          <td>{{$trip->created_at}}</td>
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
                    @endforeach
                    </div>


                </div>
                </div>
                </div>
                </div>
      </section>
</div>

@include('layouts.includes.footer')
@endsection
