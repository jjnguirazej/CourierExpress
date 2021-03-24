<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline rounded-0">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="m-0" id="heading">User Create Form</h5>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('admin.users.index') }}" class="float-right">GO BACK TO USER LIST <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <form wire:submit.prevent="store">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="text-center">
                                    <img id="output_image" style="height: 219px; width: 219px; border: 1px solid gray; margin-bottom: 1rem;">
                                </div>
                                <div class="form-group">
                                    <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control form-control-sm rounded-0">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="username">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm rounded-0"  placeholder="full name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-sm rounded-0"  placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-sm rounded-0"  placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-sm rounded-0" name="" id="">
                                        <option value="" selected>---- Gender ----</option>
                                        <option value="Male">Male</option>
                                        <option value="Male">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-sm rounded-0" name="" id="">
                                        <option value="" selected>---- Role ----</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Stuff">Stuff</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-sm rounded-0" name="" id="">
                                        <option value="" selected>---- Branch ----</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-sm rounded-0" name="" id="">
                                        <option value="" selected>---- Status ----</option>
                                        <option value="Male">Active</option>
                                        <option value="Male">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control form-control-sm rounded-0" name="" id="" placeholder="address" style="height: 78px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm rounded-0"  placeholder="city">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm rounded-0"  placeholder="state">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm rounded-0"  placeholder="zip code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm rounded-0"  placeholder="country">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control form-control-sm rounded-0" name="" id="" placeholder="description" style="height: 78px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-sm rounded-0"  placeholder="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-sm rounded-0"  placeholder="re-password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <button type="submit" class="btn btn-sm btn-default rounded-0">SUBMIT</button>
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
</div>
