@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="content-layout" style="min-height: 269.546px">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->
            <section class="main-content mb-2">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <div class="container-fluid">
                        <ol class="breadcrumb py-1 mb-0">
                            <li class="breadcrumb-item">
                                <a href=""><i class="fa fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Request Services
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    <div class="sidebar jsSubMainHeight pb-3">
                        <div class="sidebar-info">
                            <h4 class="sidebar-header "><i class="fa fa-tint"></i>Water Services</h4>
                            <div class="info-items">
                                <div class="">
                                    <div class="date clearfix">
                                        <span class="float-right">
                                            <!-- <i class="fas fa-calendar-alt"></i> 11-09-2017</span> -->
                                        </span>
                                    </div>
                                    <a href="/pages/news.html" class="media">
                                        <div class="news-image">
                                            <!-- <img src="images/bg-image.jpg" alt="News Image" class="img-fluid"> -->
                                        </div>

                                    </a><a href="/online-services/new-water-connection">
                                        <button type="button"
                                            class=" btn btn-custom list-group-item list-group-item-action">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> New Connection
                                            Service
                                        </button>
                                    </a>


                                </div>
                                <div class="">
                                    <div class="date clearfix">
                                        <span class="float-right">
                                            <!-- <i class="fas fa-calendar-alt"></i> 11-09-2017</span> -->
                                        </span>
                                    </div>
                                    <a href="/pages/news.html" class="media">
                                        <div class="news-image">
                                            <!-- <img src="images/bg-image.jpg" alt="News Image" class="img-fluid"> -->
                                        </div>
                                        <div class="media-body news-content">
                                            <!-- <div>News Title: Lorem ipsum dolor sit endus amet, consectetur adipisicing elit. Architecto impedit soluta...
                            </div> -->
                                        </div>
                                    </a><a href="/online-services/report-issue">
                                        <button type="button" class="btn btn-custom list-group-item list-group-item-action">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            Report Issue <br>
                                        </button>
                                    </a>

                                </div>
                                <div class="">
                                    <div class="date clearfix">
                                        <span class="float-right">
                                            <!-- <i class="fas fa-calendar-alt"></i> 11-09-2017</span> -->
                                        </span>
                                    </div>
                                    <a href="/pages/news.html" class="media">
                                        <div class="news-image">
                                            <!-- <img src="images/bg-image.jpg" alt="News Image" class="img-fluid"> -->
                                        </div>
                                        <div class="media-body news-content">
                                            <!-- <div>News Title: Lorem ipsum dolor sit endus amet, consectetur adipisicing elit. Architecto impedit soluta...
                            </div> -->
                                        </div>
                                        <!-- </a><a href="/online-services/view-bill">
                                        <button type="button"
                                            class="btn btn-custom list-group-item list-group-item-action">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i></i>View Bill
                                        </button>
                                    </a> -->

                                </div>
                                <div class="">
                                    <div class="date clearfix">
                                        <span class="float-right">
                                            <!-- <i class="fas fa-calendar-alt"></i> 11-09-2017</span> -->
                                        </span>
                                    </div>
                                    <a href="/pages/news.html" class="media">
                                        <div class="news-image">
                                            <!-- <img src="images/bg-image.jpg" alt="News Image" class="img-fluid"> -->
                                        </div>
                                        <div class="media-body news-content">
                                            <!-- <div>News Title: Lorem ipsum dolor sit endus amet, consectetur adipisicing elit. Architecto impedit soluta...
                            </div> -->
                                        </div>
                                    </a>
                                    <!-- <a href="/online-services/remove-sewage-water">
                                        <button type="button"
                                            class="btn btn-custom list-group-item list-group-item-action">
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            Remove Sewage Water
                                        </button>
                                    </a> -->

                                </div>
                            </div>
                        </div>

                        <div class="sidebar-info mb-2">
                            <h4 class="sidebar-header">Announcements</h4>
                            <div class="info-items">

                                <ul class="list-unstyled programs p-1">
                                    <li class="border-bottom">
                                        <div class="clearfix">
                                            <span class="date float-right"><i class="far fa-calendar-alt"></i>
                                                17<sup>th</sup>
                                                Nov-2023</span>
                                        </div>
                                        <a class="link-black" href="/announcements/dawati-la-huduma-kwa-wateja-bawasa">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.... ...</a>

                                    </li>

                                    <li class="border-bottom">
                                        <div class="clearfix">
                                            <span class="date float-right"><i class="far fa-calendar-alt"></i>
                                                05<sup>th</sup>
                                                Nov-2023</span>
                                        </div>
                                        <a class="link-black"
                                            href="/announcements/ofa-maalum-kwa-wateja-waliositishiwa-huduma-ya-maji-kwa-kushindwa-kulipa-bili">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.... ...</a>

                                    </li>

                                </ul>
                            </div>
                            <div class="text-center more">
                                <a href="/announcements" class="btn btn-custom">More Announcements
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="sub-main-content jsSubMainHeight" style="height: 586.312px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="title-decoration py-2 mb-3">Request Service</h4>
                                <div>
                                    <form class="needs-validation"
                                        action="https://www.mwauwasa.go.tz/online-services/new-water-connection"
                                        method="post" novalidate="">
                                        <input type="hidden" name="_token" value="j7TB4OZdRBVF2N0LmrOTQtD6MhzVIuM4hI2EAT8u">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">First Name</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="" name="first_name" value="" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Middle name</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="" name="middle_name" value="" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="" name="last_name" value="" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">Phone Number</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="+255" name="mobile_number" value="" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Phone number
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Email Address</label>
                                                <input type="Email" class="form-control" id="validationCustom04"
                                                    placeholder="" name="email" value="" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Email address.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05">Service Type:</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="service_type"
                                                        class="custom-control-input" value="Water">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline1">Water</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="service_type"
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
                                                    name="location" placeholder="Name of Location" value="" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05">Location Status:</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline4" name="location_status"
                                                        class="custom-control-input" value="Measured">
                                                    <label class="custom-control-label"
                                                        for="customRadioInline4">Measured</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline5" value="Not Measured"
                                                        name="location_status" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline5">Not
                                                        measured</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" id="site_plan_available_form_row" style="display: none;">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05">Not Measured:</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline6" value="Yes"
                                                        name="site_plan_available" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline6">I Have a
                                                        Site
                                                        Plan</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline7" value="No"
                                                        name="site_plan_available" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline7">No Site
                                                        Plan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#fileModal">
                                            Open Modal
                                        </button>
                                        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/sub-main-content -->
            </section>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="fileModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Files</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fileInput">Select File:</label>
                            <input type="file" class="form-control-file" id="fileInput" multiple>
                        </div>
                        <button type="button" class="btn btn-success" onclick="uploadFiles()">Upload</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit" action="/add_event" methode="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="date" class="col-form-label">Date To :</label>
                            <input type="date" class="form-control" value="{{ old('date') }}" id="date" name="date">
                            <span class="text-danger">@error('date') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="desc" value="{{ old('desc') }}" name="desc"></textarea>
                            <span class="text-danger">@error('desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="imge" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" id="" value="{{ old('imge') }}" name="imge"
                                placeholder="Enter news Images" style="border:2px;">
                            <span class="text-danger">@error('imge') {{ $message }}@enderror</span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info" form="edit">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection

