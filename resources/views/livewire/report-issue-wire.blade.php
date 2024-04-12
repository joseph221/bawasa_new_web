<div class="row">
    <div class="col-md-12">
        <div>
            <h4 class="title-decoration py-2 mb-3">
                {{ __('messages.Report_Issue') }}
            </h4>
            <div>
                <form wire:submit="save" class="needs-validation" method="post" novalidate="">
                    @csrf
                    <input type="hidden" name="_token" value="ajzGqeNNPGL3kfyJzWV9QtP13qrAvKd5uGdELfPF">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First Name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder=""
                            wire:model="first_name"  required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder=""
                            wire:model="last_name"  required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Phone Number</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="+255"
                            wire:model="phone_number" value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid Phone number
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Email Address</label>
                            <input type="Email" class="form-control" id="validationCustom04" placeholder=""
                            wire:model="email" value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid Email address.
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Ward Name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder=""
                            wire:model="ward" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Street Name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder=""
                            wire:model="street" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type of Issue</label>
                            <select class="custom-select my-1 mr-sm-2" wire:model="type_of_issue"
                                id="inlineFormCustomSelectPref">
                                <option selected="">Choose ....</option>
                                <option value="Theft">Theft</option>
                                <option value="Leakage">Leakage</option>
                                <option value="Water scarcity">Water scarcity</option>
                                <option value="Meter Leakage">Metre leakage</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom07">Description of issue</label>
                            <textarea class="form-control" rows="5" id="validationCustom07" placeholder="" wire:model="description_of_issue"
                                required=""></textarea>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><div wire:loading class="spinner-border spinner-border-md"></div>
                        Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
