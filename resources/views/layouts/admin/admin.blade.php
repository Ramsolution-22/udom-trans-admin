@extends('layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection
@section('content')
    @include('layouts.includes.header')
    @include('layouts.includes.sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
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
                            <a href="/admin/create-user" class="text-decoration-none">
                                <button class="btn btn-primary mt-2">Add Admin</button>
                            </a>
                           

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
                            <table class="table table-bordered table-striped" id="admin">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->status == '1')
                                                    <a href="{{ route('userStatus', $user->id) }}">
                                                        <button class="btn btn-success ">Active</button>
                                                    </a>
                                                @else
                                                    <a href="{{ route('userStatus', $user->id) }}">
                                                        <button class="btn btn-danger ">Blocked</button>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <a class="text-decoration-none"
                                                        href="{{ route('edituser', $user->id) }}">
                                                        <button class="btn btn-primary">
                                                            <i class="nav-icon fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form method="POST" action="{{ route('deleteuser', $user->id) }}">
                                                        @csrf
                                                        <button class="btn btn-danger mx-3">
                                                            <i class="nav-icon fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="row my-2  ">

                    <ul class="pagination justify-content-end">
                      <li class="page-item">
                        {{$users->links()}}

                </li>
                    </ul>

                </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.includes.footer')
@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#admin').DataTable();
        });
    </script>
@endsection
