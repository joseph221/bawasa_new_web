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
                                Video Galley
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
                                        Video Galley
                                    </h4>
                                </div>
                                <div class="row more-info">
                                    <div class="col-md-4">
                                        <div class="video-container mb-2">
                                            <iframe src="https://www.youtube.com/embed/V12oCNAmIKs?si=tLriQ8QetFGlgred"
                                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                                webkitallowfullscreen="webkitallowfullscreen"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <h6 class="mb-1">mradi wa maji Darakuta-Magugu</h6>
                                            <p class="mb-1">Naibu Waziri wa Maji Mhandisi Maryprisca Mahundi amewaagiza Mamlaka ya Majisafi na Usafi wa Mazingira Mjini Babati (BAWASA) kuhakikisha ndani ya siku moja wanaweka miundombinu ya kutibu maji
                                                kwenye chujio la maji la mradi wa maji Darakuta-Magugu.</p>
                                            <p class="date">Posted On: <i class="fa fa-calendar"></i> Aug 25, 2021
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row more-info">
                                <div class="col-md-4">
                                        <div class="video-container mb-2">
                                            <iframe src="https://www.youtube.com/embed/jDBVz3jnYds?si=-6HTSamq4UPRQpo0"
                                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                                webkitallowfullscreen="webkitallowfullscreen"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="">
                                            <h6 class="mb-1">Maadhimisho ya mei mosi 2023</h6>
                                            <p class="mb-1">BAWASA YASISITIZA UMAKINI MATUMIZI YA MAJI KUEPUKA BILI KUWA KUBWA.</p>
                                            <p class="date">Posted On: <i class="fa fa-calendar"></i> May 1, 2023
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <!-- ********************************************** Pagination **********************************************   -->
                                <nav aria-label="Page navigation" class="nav-pagination">
                                    <ul class="pagination">

                                    </ul>
                                </nav>
                                <!-- ********************************************** Pagination **********************************************   -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!--/sub-main-content -->
        </section>
    </div>

@endsection
