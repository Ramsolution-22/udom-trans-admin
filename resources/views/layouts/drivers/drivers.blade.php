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
                    <h1 class="m-0 text-dark">Drivers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Drivers</li>
                    </ol>
                </div>
                @include('layouts.includes.alert')
            </div>
        </div>
    </div>

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
                                <input type="text" name="table_search" class="form-control float-right "
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default "><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Licence</th>
                                    <th>Vehicle Id</th>
                                    <th>Profile Picture</th>
                                    <th>Offline / Online</th>
                                    <th>Status</th>
                                    <th>Other Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drivers as $driver)
                                    <tr>
                                        <td>{{ $driver->id }}</td>
                                        <td>{{ $driver->firstName }} {{ $driver->lastName }}</td>
                                        <td>{{ $driver->email }}</td>
                                        <td>{{ $driver->phoneNumber }}</td>
                                        <td>{{ $driver->licence }}</td>
                                        <td>{{ $driver->cab->Plate_number }}</td>
                                        <td>{{ $driver->profile_picture }} </td>
                                        <td>
                                            @if ($driver->active == '1')
                                                <button class="btn btn-success">Online</button>
                                            @else
                                                <button class="btn btn-danger">Offline</button>
                                            @endif

                                        </td>
                                        <td>
                                            @if ($driver->status == '0')
                                                <a href="{{ route('driverstatus', $driver->id) }}">
                                                    <button class="btn btn-danger">Blocked</button>
                                                </a>
                                            @else
                                                <a href="{{ route('driverstatus', $driver->id) }}">
                                                    <button class="btn btn-primary">Active</button>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <a href="{{route('tripshistory', $driver->id)}}" class="text-decoration-none">
                                                    <button class="btn btn-info ">Trip history</button>
                                                </a>
                                                <a href="{{ route('statement', $driver->id) }}">
                                                    <button class="btn btn-warning mx-1 ">statement</button>
                                                </a>
                                                {{-- <a href="" class="">
                                <button class="btn btn-primary my-2">Document List</button>
                            </a> --}}
                                            </div>
                                        </td>
                                        <td>

                                            <form action="{{ route('deletedriver', $driver->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                </button>
                                            </form>
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
