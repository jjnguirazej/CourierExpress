@extends('admin.layouts.master')
@section('title') Edit Role @stop

@push('css')
@endpush

@section('content')
    <livewire:admin.role.edit :role="$role" />
@stop

@push('js')

@endpush
