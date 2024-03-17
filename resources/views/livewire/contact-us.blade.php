<div class="row">
        <div wire:loading>loading...</div>
        <div class="col-md-12">
            <h4 class="title-decoration py-2 mb-3">Contact Us</h4>
            <div class="contact">
                <!-- Google Map -->
                <div class="google-map mb-3">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.005641544276!2d35.719749375827!3d-4.219158595754693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184a0f99b29c7145%3A0x2a6cc7a550f2c2ec!2sBAWASA!5e0!3m2!1sen!2stz!4v1705419737433!5m2!1sen!2stz"
                            width="780" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <!-- End Google Map -->

                <div class="row">
                    <div class="col-md-5">
                        <address>
                            <h6>lbl_contact_address.</h6>
                            <i class="fa fa-map-marker"></i> Postal Address Head Offices Miyomboni Street,
                            S.L.P 245, BABATI
                            <br />
                            <!-- <span class="font-bold"><i class="fa fa-phone"></i> Hotline:</span>
                                            +255
                                            <br /> -->
                            <!-- <span class="font-bold"><i class="fa fa-phone"></i> Toll Free
                                                Number:</span>
                                            0800110023
                                            <br /> -->
                            <!-- <span class="font-bold"><i class="fa fa-fax"></i> Fax: Nō:</span>
                                            +255  -->
                            <span class="font-bold"><i class="fa fa-fax"></i> Tell: Nō:</span>
                            +255 677025538
                            <br />
                            <span class="font-bold"><i class="fa fa-globe"></i> Email Address:</span>
                            info@bawasa.go.tz
                            <br />
                        </address>
                    </div>

                    <div class="col-md-7">
                        <div>
                            <form wire:submit="store" accept-charset="UTF-8" class="add_p">

                                <!-- <input name="_token" type="hidden"
                                                    value="j7TB4OZdRBVF2N0LmrOTQtD6MhzVIuM4hI2EAT8u" /> -->
                                @csrf
                                <legend>Feedback, Complaint or Opinion:</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <input placeholder="" required="" autocomplete="off" type="text" wire:model="names" />
                                        <label for="names">Fullname</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input placeholder="" required="" autocomplete="off" wire:model="email"
                                            type="email" />
                                        <label for="email">Email Address</label>
                                        <p>
                                            <span class="form_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input placeholder="" required="" autocomplete="off" wire:model="phone" type="phone" />
                                        <label for="phone">Phone</label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 p-1">
                                        <input placeholder="" autofocus="" required="" wire:model="organization"
                                            type="text" />
                                        <label for="names">Organization</label>
                                        <p>
                                            <span class="form_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    {{-- <div class="col-md-12 col-sm-12 p-1">
                                        <input placeholder="" autofocus="" required="" wire:model="subject" type="text" />
                                        <label for="names">Subject</label>
                                        <p>
                                            <span class="form_error" style="color: red"></span>
                                        </p>
                                    </div> --}}
                                    <div class="col-md-12 col-sm-12 p-2">
                                        <textarea placeholder="Message" cols="30" rows="3" autofocus="" required=""
                                            wire:model="message"></textarea>

                                        <p>
                                            <span class="form_error" style="color: red"></span>
                                        </p>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success btn-raised pull-right">
                                    <div wire:loading class="spinner-border spinner-border-md"></div>
                                    Send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
