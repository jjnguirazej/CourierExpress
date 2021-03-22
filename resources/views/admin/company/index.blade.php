@extends('admin.layouts.master')
@section('title') Company Master @stop

@push('css')
@endpush

@section('content')
<div class="col-md-12">
    @include('admin.alert')
</div>
<div class="col-md-12">
    <div class="card card-dark card-outline rounded-0">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h5 class="m-0" id="heading">
                        @if (count ($companies_master) > 0)
                            Edit existing company
                        @else
                            Add new company
                        @endif
                    </h5>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="{{ route('admin.dashboard') }}" class="float-right">GO BACK TO DASHBOARD <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <form method="POST" id="company-form" enctype="multipart/form-data">
            @csrf
            @if(count ($companies_master) > 0)
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_logo">Company Logo</label>
                            <input type="file" name="company_logo" id="company_logo" class="form-control form-control-sm rounded-0">
                            @error('company_logo')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_name }}"
                                @endif
                            >
                            @error('company_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_phone">Company Phone</label>
                            <input type="number" name="company_phone" id="company_phone" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_phone }}"
                                @endif
                            >
                            @error('company_phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_email">Company Email</label>
                            <input type="email" name="company_email" id="company_email" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_email }}"
                                @endif
                            >
                            @error('company_email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="company_address">Company Address</label>
                            <textarea name="company_address" id="company_address" rows="2" class="form-control form-control-sm rounded-0">
                                @if(count ($companies_master) > 0)
                                    {{ $company_master->company_address }}
                                @endif
                            </textarea>
                            @error('company_address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_city">City</label>
                            <input type="text" name="company_city" id="company_city" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_city }}"
                                @endif
                            >
                            @error('company_city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_state">State</label>
                            <input type="text" name="company_state" id="company_state" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_state }}"
                                @endif
                            >
                            @error('company_state')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_zip_code">Zip Code</label>
                            <input type="text" name="company_zip_code" id="company_zip_code" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_zip_code }}"
                                @endif
                            >
                            @error('company_zip_code')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label for="company_country">Country</label>
                            <input type="text" name="company_country" id="company_country" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_country }}"
                                @endif
                            >
                            @error('company_country')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="company_gst">Company GST</label>
                            <input type="text" name="company_gst" id="company_gst" class="form-control form-control-sm rounded-0"
                                @if(count ($companies_master) > 0)
                                   value="{{ $company_master->company_gst }}"
                                @endif
                            >
                            @error('company_gst')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <button onclick="companyFormSubmit" class="btn btn-sm btn-dark rounded-0">
                        {{ count ($companies_master) > 0 ? 'UPDATE COMPANY DETAILS' : 'SAVE COMPANY DETAILS'}}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@push('js')
    <script>
        function companyFormSubmit()
        {
            var heading = $('#heading').val();
            if (heading == 'Add new company') {
                $('#company-form').attr('action', '{{ route('admin.company-master.store') }}').submit();
            }
            else {
                $('#company-form').attr('action', '{{ route('admin.company-master.update') }}').submit();
            }
        }
    </script>
@endpush
