@extends('admin.layouts.master')
@section('title') Branch Master @stop

@push('css')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.alert')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline rounded-0">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="m-0" id="heading">All Branch List</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('admin.branch-master.create') }}" class="btn btn-xs btn-dark rounded-0 float-right"><i class="ion-plus"></i> ADD NEW</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="branchMasterTable" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Branch Name</th>
                                <th>Branch Email</th>
                                <th>Branch Phone</th>
                                <th>Branch Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($branches as $key => $branch)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $branch->branch_name }}</td>
                                <td>{{ $branch->branch_email }}</td>
                                <td>{{ $branch->branch_phone }}</td>
                                <td>{{ $branch->branch_address }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.branch-master.edit', $branch->id) }}" class="btn btn-xs btn-default rounded-0 mr-2">
                                            <i class="ion-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $branch->id }}').submit();" class="btn btn-xs btn-danger rounded-0">
                                            <i class="ion-close"></i>
                                        </a>
                                        <form id="delete-form-{{ $branch->id }}" action="{{ route('admin.branch-master.destroy', $branch->id) }}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
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
            $('#branchMasterTable').DataTable();
        } );
    </script>
@endpush
