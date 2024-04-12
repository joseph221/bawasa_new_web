@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="content-layout" style="min-height: 269.546px;">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->

            <section class="main-content mb-2">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb  py-1 mb-0">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Vision and Mission</li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include("layouts.sidecontent")


                    <div class="sub-main-content js-sub-main-height" style="height: 586.312px;">
                        <div class="row">
                            <div class="col-md-12">

                                <div>
                                    <h4 class="title-decoration py-2 mb-3"> Vision and Mission</h4>
                                    <div>
                                        <h2 class="widgettitle" color="" style="font-family:">Vision<br></h2>
                                        <p>A role model utility in the water supply and sanitation services in Tanzania</p>
                                        <h4>Mission<br></h4>
                                        <p>To provide reliable and high-quality services of water supply and sanitation
                                            within the Service area in a professional and customer focused manner</p>
                                        <!-- <h5>Quality Policy<br></h5>
                                            <p style="text-align: justify;">Our Quality Policy is customer focused; built on
                                                thorough understanding of customer’s requirements and expectations, fulfilling
                                                those requirements and expectations to their satisfaction, and ensure compliance
                                                to nationally and internationally recognized standards, legislation and
                                                regulations; encored on the creation and maintenance of organizational culture
                                                that focuses on continuous improvement of quality of our processes, systems, and
                                                products.</p> -->
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
