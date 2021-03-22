@extends('admin.layouts.master')
@section('title') Edit Branch Master @stop

@push('css')
@endpush

@section('content')
{{--    @livewire('admin.branch.edit')--}}
    <livewire:admin.branch.edit :branch="$branch" />
@stop

@push('js')

@endpush
