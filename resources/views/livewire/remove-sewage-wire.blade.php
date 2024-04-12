<div class="row">
    <div class="col-md-12">
        <div>
            <h4 class="title-decoration py-2 mb-3">
                {{ __('messages.Remove_Sewage_Water')}}
            </h4>
            <div>
                <form class="needs-validation" method="post" action="https://www.mwauwasa.go.tz/online-services/remove-sewage-water" novalidate="">
                    <input type="hidden" name="_token" value="ajzGqeNNPGL3kfyJzWV9QtP13qrAvKd5uGdELfPF">                        <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Jina la kwanza</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" name="first_name" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Jina la kati</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" name="middle_name" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Jina la ukoo</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" name="last_name" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        {{-- <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Namba ya akaunti</label>
                            <input type="text" class="form-control" name="account_number" id="account_number" placeholder="" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> --}}
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Namba ya Simu</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="+255" name="phone_number" value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid Phone number
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Namba ya Simu</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="+255" name="mobile_number" value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid Mobile number
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom06">Namba ya ploti</label>
                            <input type="text" class="form-control" id="validationCustom06" placeholder="" name="plot_number" value="" required="">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Kitongoji</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" name="ward_location" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Mtaa</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" name="street_name" value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">Tuma</button>
                </form>
            </div>
        </div>
    </div>
</div>
