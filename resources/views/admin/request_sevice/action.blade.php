<!-- edit modal -->
<div class="modal right fade" id="editModal_{{$d->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit {{ $d->first_name }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="" action="request_service/{{$d->id}}" method="post">
                @csrf
                @method('post')
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="first name" class="col-form-label">first name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$d->first_name}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="middle name" class="col-form-label">Middle name:</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{$d->middle_name}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="last name" class="col-form-label">Last name:</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{$d->last_name}}">

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="Phone number" class="col-form-label">Phone number:</label>
                            <input type="tell" class="form-control" id="mobile_number" name="mobile_number" value="{{$d->mobile_number}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="PLOT Number" class="col-form-label">PLOT Number:</label>
                            <input type="text" class="form-control" id="prot_number" name="prot_number" value="{{$d->prot_number}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="Email Address" class="col-form-label">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$d->email}}">

                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="Street Name" class="col-form-label">Street Name:</label>
                            <input type="text" class="form-control" id="mtaa" name="mtaa" value="{{$d->mtaa}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="House Number" class="col-form-label">House Number:</label>
                            <input type="text" class="form-control" id="house_no" name="house_no" value="{{$d->house_no}}">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="NIDA Number" class="col-form-label">NIDA Number:</label>
                            <input type="number" class="form-control" id="nida" name="nida" value="{{$d->nida}}">

                        </div>
                    </div>
                </div>

                {{-- radio buttons --}}
                {{-- <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Service Type:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="service_type"
                                class="custom-control-input" value="Water" {{ $d->service_type == "Water" ? 'checked': '' }} >
                            <label class="custom-control-label"
                                for="customRadioInline1">Water</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="service_type"
                                class="custom-control-input" value="Sewage" {{ $d->service_type == "Sewage" ? 'checked': '' }}>
                            <label class="custom-control-label"
                                for="customRadioInline2">Sewage</label>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Location Status</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="location_status"
                                class="custom-control-input" value="Measured" {{ $d->location_status == "Measured" ? 'checked': '' }} >
                            <label class="custom-control-label"
                                for="customRadioInline3">Measured</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="location_status"
                                class="custom-control-input" value="Not Measured" {{ $d->location_status == "Not Measured" ? 'checked': '' }}>
                            <label class="custom-control-label"
                                for="customRadioInline4">Not Measured</label>
                        </div>
                    </div>

                </div>
                @if ($d->location_status == "Not Measured")
                <div class="form-row" id="site_plan_available_form_row">
                    <div class="col-md-8 mb-3">
                        <label for="validationCustom05">Not Measured:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline6" value="Yes"
                           name="site_plan_available" class="custom-control-input" @if ($d->site_plan_available == "Yes")
                                @checked(true)
                           @endif>
                            <label class="custom-control-label" for="customRadioInline6">I Have a
                                Site
                                Plan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline7" value="No"
                           name="site_plan_available" class="custom-control-input" @if ($d->site_plan_available == "No")
                                @checked(true)
                           @endif>
                            <label class="custom-control-label" for="customRadioInline7">No Site
                                Plan</label>
                        </div>
                    </div>
                </div>
                @endif --}}


                <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-sm btn-info">update</button>
                </div>
            </form>
            {{-- <form  wire:submit="save"  method="post" >
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="First Name">First Name</label>
                        <input type="text" class="form-control" wire:model="first_name" value="{{ $d->first_name }}">

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Middle name</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            placeholder="" wire:model="nida" value="{{ $d->first_name }}" required="">
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
                        <input type="tell" class="form-control" id="validationCustom03"
                            placeholder="+255" wire:model="mobile_number" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid Phone number
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="PLOT Number">PLOT Number</label>
                        <input type="text" class="form-control" id="validationCustom03"
                             wire:model="prot_number" value="" required="">
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
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">Street Name</label>
                        <input type="text" class="form-control" id="validationCustom03"
                            placeholder="" wire:model="mtaa" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid Phone number
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">House Number:</label>
                        <input type="text" class="form-control" id="validationCustom03"
                            placeholder="" wire:model="house_no" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid House number
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom04">NIDA Number:</label>
                        <input type="number" class="form-control" id="validationCustom04"
                            placeholder="" wire:model="nida" value="" required="">
                        <div class="invalid-feedback">
                            Please provide a valid number.
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
                            wire:model="location" placeholder="Name of Location" value="joseph" required="">
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
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-sm btn-info">update</button>
                </div>
            </form> --}}
        </div>

    </div>
    </div>
</div>
