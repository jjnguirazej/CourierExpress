<div>
    <div class="col-md-12">
        <div class="card card-dark card-outline rounded-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="m-0" id="heading">Create Branch Form</h5>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('admin.branch-master.index') }}" class="float-right">GO BACK TO MANAGE BRANCH <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <form wire:submit.prevent="store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" wire:model="branch_name" id="branch_name" class="form-control form-control-sm rounded-0">
                                @error('branch_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="branch_email">Branch Email</label>
                                <input type="email" wire:model="branch_email" id="branch_email" class="form-control form-control-sm rounded-0">
                                @error('branch_email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="branch_phone">Branch Phone</label>
                                <input type="number" wire:model="branch_phone" id="branch_phone" class="form-control form-control-sm rounded-0">
                                @error('branch_phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="branch_address">Branch Address</label>
                                <textarea wire:model="branch_address" id="branch_address" rows="3" class="form-control form-control-sm rounded-0"></textarea>
                                @error('branch_address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="form-group">
                                <label for="branch_city">City</label>
                                <input type="text" wire:model="branch_city" id="branch_city" class="form-control form-control-sm rounded-0">
                                @error('branch_city')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="form-group">
                                <label for="branch_state">State</label>
                                <input type="text" wire:model="branch_state" id="branch_state" class="form-control form-control-sm rounded-0">
                                @error('branch_state')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="form-group">
                                <label for="branch_zip_code">Zip Code</label>
                                <input type="text" wire:model="branch_zip_code" id="branch_zip_code" class="form-control form-control-sm rounded-0">
                                @error('branch_zip_code')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="form-group">
                                <label for="branch_country">Country</label>
                                <input type="text" wire:model="branch_country" id="branch_country" class="form-control form-control-sm rounded-0">
                                @error('branch_country')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <button type="submit" class="btn btn-sm btn-dark rounded-0">CREATE BRANCH</button>
                        </div>
                        <div class="col-sm-12 col-md-6 text-right" wire:loading wire:target="store">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
