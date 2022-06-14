@extends('layouts.app')

@section('content')
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->


        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="ion ion-arrow-graph-up-right mr-1"></i>
                                    App statistics
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="row mx-auto">
                                    <!-- small box -->
                                    <div class="col-lg-6 col-6">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>{{ $riders }}</h3>

                                                <p>Total Riders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="/riders" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-6">

                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>{{ $drivers }}</sup></h3>

                                                <p>Total Drivers</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                            <a href="/drivers" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>{{ $cabs }}</h3>

                                                <p>Total Vehicles</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-model-s"></i>
                                            </div>
                                            <a href="/vehicles" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>{{ $users }}</h3>

                                                <p>Total Admins</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-person"></i>
                                                {{-- <i class="ion ion-cash"></i> --}}
                                            </div>
                                            <a href="/admin" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-6">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="ion ion-stats-bars mr-1"></i>
                                    Trip statistics
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="row mx-auto">
                                    <!-- small box -->
                                    <div class="col-lg-6 col-6">
                                        <div class="small-box bg-secondary">
                                            <div class="inner">
                                                <h3>{{ $allTrips }}</h3>

                                                <p>Total No of Trips</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-speedometer"></i>
                                            </div>
                                            <a href="/trips" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-6">

                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>{{ $cancelled_trips }}</h3>

                                                <p>cancelled Trips</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-close-circled"></i>
                                            </div>
                                            <a href="/cancelled-trips" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-primary">
                                            <div class="inner">
                                                <h3>{{ $scheduled_trips }}</h3>

                                                <p>Scheduled Trips </p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-clock"></i>
                                            </div>
                                            <a href="/scheduled-trips" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>{{ $completed_trips }}</h3>
                                                <p>Complete Trips</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-checkmark-circled"></i>
                                            </div>
                                            <a href="/completed-trips" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Main row -->
        <!-- Left col -->
        <section class="content ">
            <div class="row mx-auto my-4">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="col-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-bar mr-1"></i>
                                Trip Status
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <li class="fas fa-chart-pie mr-1"></li>
                                Driver Statistics
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mx-auto">
                                <div class="col-8">
                                    <div class="chart-responsive">
                                        <canvas id="sales-chart-canvas" height="300"></canvas>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="far fa-circle text-success"></i> Approved Drivers</li>
                                        <li><i class="far fa-circle text-warning"></i> Pending Drivres</li>
                                        <li><i class="far fa-circle text-danger"></i> Blocked Drivers</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

        </section>

        <!-- table -->

        <section class="content">
            <div class="row mx-auto col-12">
                <div class="card mx-auto col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-table"></i>
                            Recent Trips
                        </h3>
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
                                @foreach ($trips as $trip)
                                    <tr>
                                        <td>{{ $trip->id }}</td>
                                        <td>{{ $trip->rider->firstName }} {{ $trip->rider->lastName }}</td>
                                        <td>{{ $trip->driver->firstName }} {{ $trip->driver->lastName }}</td>
                                        <td><i class="fas fa-location-dot mx-1 text-danger" ></i>{{ $trip->start_location->landmark_name }} <br><i class="fas fa-location-dot mx-1 text-success" ></i>
                                            {{ $trip->end_location->landmark_name }}
                                        </td>
                                        <td>{{ $trip->created_at }} </td>
                                        <td>{{ $trip->trip_start_time }} <br>
                                            {{ $trip->trip_end_time }}</td>
                                        <td>{{ $trip->cab->type }}</td>
                                        <td>{{ $trip->payment->amount }}</td>

                                        <td>
                                            @if ($trip->status == '1')
                                                <button class="btn btn-success  my-1">Completed</button>
                                            @elseif ($trip->status == '2')
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

                    </div>
                </div>
            </div>

        </section>

    </div>

</div>
</div>
@include('layouts.includes.footer')
@endsection
