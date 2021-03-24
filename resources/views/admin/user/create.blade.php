@extends('admin.layouts.master')
@section('title') User Create @stop

@push('css')
@endpush

@section('content')
    @livewire('admin.user.create')
@stop

@push('js')
    <script>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
