@extends('layouts.app')

@section('title', 'Search Player')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Player List
                                {{-- <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                                    data-bs-target="#addUser"><i class="fas fa-plus me-2"></i>Add User</a> --}}
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover table-start" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Team Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($players as $list)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><a href="{{ url('playersearch', $list->id) }}" class="text-decoration-none">{{ $list->name }}</a></td>
                                            <td>{{ $list->team_name }}</td>
                                            {{-- <td>{{ $user->is_admin == 1 ? 'Admin' : 'Cashire' }}</td> --}}
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editUser{{ $list->id }}"
                                                        class="btn  btn-sm btn-info me-2"><i
                                                            class="fas fa-edit me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteUser{{ $list->id }}"><i
                                                            class="fas fa-trash me-1"></i>Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @include('useredit')
                                        @include('userdelete') --}}
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
    {{-- @include('useradd') --}}
@endsection