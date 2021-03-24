@extends('admin.layouts.master')
@section('title') Role @stop

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
                            <h5 class="m-0" id="heading">All Role List</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-xs btn-dark rounded-0 float-right">
                                <i class="ion-plus"></i> ADD NEW
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="roleTable" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-xs btn-default rounded-0 mr-2">
                                            <i class="ion-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onclick="return confirm('Are you sure to DELETE this?')">
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
            $('#roleTable').DataTable();
        } );
    </script>
@endpush
