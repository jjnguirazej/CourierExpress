@extends('admin.layouts.master')
@section('title') User @stop

@push('css')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.alert')
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-dark card-outline rounded-0">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="m-0" id="heading">All User List</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-xs btn-dark rounded-0 float-right">
                                <i class="ion-plus"></i> ADD NEW
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="userTable" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Branch</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->branch->branch_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-xs btn-default rounded-0 mr-2">
                                            <i class="ion-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onclick="return confirm('Are you sure to DELETE this?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger rounded-0">
                                                <i class="ion-close"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        $(document).ready( function () {
            $('#userTable').DataTable();
        } );
    </script>
@endpush
