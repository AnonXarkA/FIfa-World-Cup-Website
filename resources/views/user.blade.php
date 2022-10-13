@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                User List
                                <div class="btn-group float-end">
                                    <a href="#" class="btn btn-primary btn-sm float-end me-2" data-bs-toggle="modal"
                                    data-bs-target="#addUser"><i class="fas fa-plus "></i>Add User</a>

                                    <a href="#" class="btn btn-warning btn-sm me-2"
                                    data-bs-toggle="modal" data-bs-target="#editPass"><i class="fas fa-edit me-2"></i>Edit
                                    Password</a>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover table-start" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- <td>{{ $user->is_admin == 1 ? 'Admin' : 'Cashire' }}</td> --}}
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editUser{{ $user->id }}"
                                                        class="btn  btn-sm btn-info me-2"><i
                                                            class="fas fa-edit me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteUser{{ $user->id }}"><i
                                                            class="fas fa-trash me-1"></i>Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('useredit')
                                        @include('userdelete')
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('useradd')
    @include('passwordmodal')
@endsection