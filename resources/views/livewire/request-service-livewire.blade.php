
<div class="row">
    <div class="col-md-12">
        <h4 class="title-decoration py-2 mb-3">Request Service</h4>
        <div>
            <form  wire:submit="save" class="needs-validation" method="post" novalidate="">
                @csrf
                <input type="hidden" name="_token" value="j7TB4OZdRBVF2N0LmrOTQtD6MhzVIuM4hI2EAT8u">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">First Name</label>
                        <input type="text" class="form-control" id="validationCustom01"
                            placeholder="" wire:model="first_name" value="" required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Middle name</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            placeholder="" wire:model="middle_name" value="" required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            placeholder="" wire:model="last_name" value="" required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">Phone Number</label>
                        <input type="text" class="form-control" id="validationCustom03"
                            placeholder="+255" wire:model="mobile_number" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid Phone number
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom04">Email Address</label>
                        <input type="Email" class="form-control" id="validationCustom04"
                            placeholder="" wire:model="email" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid Email address.
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Service Type:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" wire:model="service_type"
                                class="custom-control-input" value="Water">
                            <label class="custom-control-label"
                                for="customRadioInline1">Water</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" wire:model="service_type"
                                class="custom-control-input" value="Sewage">
                            <label class="custom-control-label"
                                for="customRadioInline2">Sewage</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Location</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            wire:model="location" placeholder="Name of Location" value="" required="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Location Status:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" wire:model.live="location_status"
                                class="custom-control-input" value="Measured">
                            <label class="custom-control-label"
                                for="customRadioInline4">Measured</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline5" value="Not Measured"
                                wire:model.live="location_status" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline5">Not
                                measured</label>
                        </div>
                    </div>
                </div>
                @if ($show_site_plan_available)
                    <div class="form-row" id="site_plan_available_form_row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom05">Not Measured:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline6" value="Yes"
                                wire:model="site_plan_available" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline6">I Have a
                                    Site
                                    Plan</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline7" value="No"
                                wire:model="site_plan_available" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline7">No Site
                                    Plan</label>
                            </div>
                        </div>
                    </div>
                @endif
                <button class="btn btn-primary" type="submit"> <div wire:loading class="spinner-border spinner-border-md"></div>
                    Submit</button>

            </form>
        </div>
    </div>
</div>
