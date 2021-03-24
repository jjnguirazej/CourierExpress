@extends('admin.layouts.master')
@section('title') Dashboard @stop

@push('css')
@endpush

@section('content')
<div class="col-12">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body text-center">
            <h6 class="text-bold">WELCOME TO DASHBOARD! <span class="text-danger ml-5"><i class="ion-alert"></i> THIS PROJECT IS UNDER DEVELOPMENT!</span></h6>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@stop

@push('js')
@endpush
