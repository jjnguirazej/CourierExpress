<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline rounded-0">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="m-0" id="heading">EDIT ROLE FORM</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('admin.roles.index') }}" class="float-right">GO BACK TO ROLE LIST <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <form wire:submit.prevent="update">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" wire:model="name" id="name" class="form-control form-control-sm rounded-0 @error('name') is-invalid @enderror">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <button type="submit" class="btn btn-sm btn-default rounded-0">UPDATE</button>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right" wire:loading wire:target="update">
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
</div>
