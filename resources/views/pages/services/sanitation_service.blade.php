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
                                Sanitation Service
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include("layouts.sidecontent")

                    <div class="sub-main-content js-sub-main-height" style="height: 584.312px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="title-decoration py-2 mb-3">
                                        Sanitation Service
                                    </h4>
                                    <div>
                                        <h6><b>Sewerage Services</b></h6>
                                        <p>Babati Urban Water Supply and Sanitation Authority has not yet started providing sewerage services so waste water
                                            which is generated is transported by vacuum trucks of Babati Town Council and
                                            discharged into sisal plantation at Sinai.</p>
                                        <p>In order to prevent this crude damping
                                            Babati Urban Water Supply and Sanitation Authority has acquired thirty (30) acres of land from Babati Town Council for
                                            construction of fecal sludge management facilities. Currently the utility has
                                            acquired a letter of No objection from the Ministry of Water  to construct the same at
                                            Babati town (Maisaka Katani Area).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/sub-main-content -->
            </section>
        </div>
    </div>
@endsection

