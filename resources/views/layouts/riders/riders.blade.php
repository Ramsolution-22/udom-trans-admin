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
            <h1 class="m-0 text-dark">Riders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Riders</li>
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
              <a href="/riders">
              <button class="btn btn-default mt-2 mx-4">
                  <i class="nav-icon fas fa-angle-double-left"></i>
                      Back
                    </button>
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
                      <th>Rider Id</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>Profile Picture</th>
                      <th>Reviews</th>
                      <th>Status</th>
                      <th>Other Action</th>
                      <th>Action</th>
                   </tr>
                  </thead>
                  <tbody>
                      @foreach ($riders as $rider)


                    <tr>
                        <td>0023{{$rider->id}}</td>
                        <td>{{$rider->firstName}} {{$rider->lastName}}</td>
                        <td>{{$rider->email}}</td>
                        <td>{{$rider->phoneNumber}}</td>
                        <td>{{$rider->profile_picture}}</td>
                        <td>4.5</td>
                        <td>
                            @if ($rider->status == "0")
                                <a href="{{route('riderstatus',$rider->id)}}">
                                    <button class="btn btn-danger">Disabled</button>
                                </a>
                                @else
                                <a href="{{route('riderstatus',$rider->id)}}">
                                    <button class="btn btn-primary">Enabled</button>
                                </a>
                                @endif
                        </td>
                        <td>
                            <button class="btn btn-warning">Ride History</button>

                        </td>
                        <td>
                            <form action="{{route('deleterider',$rider->id)}}" method="POST">
                                @csrf
                                <button class="btn btn-danger mx-2">
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

