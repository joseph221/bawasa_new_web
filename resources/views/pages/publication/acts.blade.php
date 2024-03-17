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
                                {{ __('messages.Acts')}}
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    <div class="sidebar jsSubMainHeight pb-3">
                        <div class="sidebar-info">
                            <h4 class="sidebar-header "><i class="fa fa-tint"></i> {{ __('messages.Water_Services')}}</h4>
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
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ __('messages.New_Connection_Service')}}
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
                                            {{ __('messages.Report_Issue')}} <br>
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
                            <h4 class="sidebar-header"><i class="fa fa-bullhorn"></i> {{ __('messages.Anouncements')}}</h4>
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
                                <a href="/announcements" class="btn btn-custom">{{ __('messages.more_anouncements')}}
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="sub-main-content js-sub-main-height" style="height: 584.312px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="title-decoration py-2 mb-3">
                                        {{ __('messages.Acts')}}
                                    </h4>
                                    <div>

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
