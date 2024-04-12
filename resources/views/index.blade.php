@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <!-- content section -->
    <div class="content-layout" style="min-height: 269.546px;">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->
            <div class="home-page">
                <article class="slider">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bg-light bs-0">
                                <!-- <div class="card" style="width:370px">
                                            <img style="width:370px; height: 370px;" class="card-img-top" src="./assets/resourse/john doe.jpg" alt="Card image">
                                            <div class="card-body">
                                            <h4 class="card-title">John Doe</h4>
                                            <p class="card-text">Some example text.</p>
                                            <a href="#" class="btn btn-primary">See Profile</a>
                                            </div>
                                        </div> -->
                                <img class="d-block w-100 p-1" style="width: 270px;height: 270px;"
                                    src="./assets/resourse/john doe.jpg" alt="Profile image">
                                <div class="text-center p-2">
                                    <hr>
                                    <h5>Ndugu. ?</h5>
                                    <hr>
                                    <h6>Ag. Managing Director</h6>
                                    <a class="btn btn-block btn-sm btn-custom"
                                        href="">{{ __('messages.Biography') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="home-carousel" class="carousel slide carousel-fade bs-0" data-ride="carousel"
                                data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" alt="maisaka borehole"
                                            src="./assets/resourse/kisima_maisaka.jpg">
                                        <span class="carousel-caption d-none d-md-block">
                                            maisaka borehole
                                        </span>
                                    </div>

                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="mabadiliko ya bei"
                                            src="./assets/resourse/lide1.png">
                                        <span class="carousel-caption d-none d-md-block">
                                            mabadiliko ya bei
                                        </span>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="mt-4">
                    <div class="row mb-0">
                        <div class="col-md-3">
                            <div class="d-flex flex-column bg-light bs-0 jsHeight">
                                <h5 class="title-text py-3 bs-1 text-center">
                                    <i class="fa fa-bullhorn"></i> {{ __('messages.Anouncements') }}
                                </h5>
                                <div class="announcements pl-3 pr-2 mt-3">
                                    @foreach ($sidedata as $anounce)
                                        <div class="media border-bottom">
                                            <div class="media-body">
                                                <div class="d-flex">
                                                    <div class="news-date">
                                                        <div class="date-dec pr-3">
                                                            {{ \Carbon\Carbon::parse($anounce->date)->format('d') }}</div>
                                                        <div class="month-dec pr-3">
                                                            {{ \Carbon\Carbon::parse($anounce->date)->format('M') }}</div>
                                                    </div>
                                                    <div>
                                                        <p>{{ \Illuminate\Support\Str::limit($anounce->content, 100) }}<br />
                                                            <a class="text-nowrap read-more"
                                                                href="/anouncements/{{ $anounce->id }}">
                                                                {{ __('messages.read_more') }}</a>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="text-center mt-auto mb-2">
                                    <a class="btn btn-custom btn-sm"
                                        href="/anouncements">{{ __('messages.more_anouncements') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex flex-column bg-light bs-0 jsHeight">
                                <h5 class="title-text py-3 bs-1 text-center justify">{{ __('messages.Our_Services') }}</h5>
                                <div class="howdoi pl-3 pr-2 mt-3 justify">
                                    <div class="howdoi-item border-bottom">
                                        <p>BAWASA deals with provisional of clean water supply and sanitation services for the
                                            residents of Babati Town and townships of Gallapo, Dareda, Magugu, Bashnet and Katesh.
                                        </p>
                                        <div class="text-center mt-auto mb-2">
                                            <a class="btn btn-custom btn-sm" href="our_service">
                                                {{ __('messages.read_more') }}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- water service -->
                        <div class="col-md-4">
                            <div class="d-flex flex-column bg-light bs-0 jsHeight">
                                <h5 class="title-text py-3 bs-1 text-center"><i class="fa fa-tint"></i>
                                    {{ __('messages.Water_Services') }}</h5>
                                <div class="howdoi pl-3 pr-2 mt-3">

                                    <div class="list-group">
                                        <a href="/requestservice">
                                            <button type="button"
                                                class=" btn btn-custom list-group-item list-group-item-action"><i
                                                    class="fa fa-arrow-circle-right"></i>
                                                {{ __('messages.New_Connection_Service') }}
                                                <br>

                                            </button>
                                        </a><br>
                                        <a href="/report_issue">
                                            <button type="button"
                                                class="btn btn-custom list-group-item list-group-item-action">
                                                <i class="fa fa-arrow-circle-right"></i> {{ __('messages.Report_Issue') }}
                                                <br>

                                            </button>
                                        </a><br>
                                        {{-- <a href="online-services/view-bill">
                                            <button type="button"
                                                class="btn btn-custom list-group-item list-group-item-action">
                                                <i class="fa fa-arrow-circle-right"></i> {{ __('messages.View_Bill')}}
                                            </button>
                                        </a><br> --}}
                                        {{-- <a href="/remove_sewage">
                                            <button type="button"
                                                class="btn btn-custom list-group-item list-group-item-action">
                                                <i class="fa fa-arrow-circle-right"></i> {{ __('messages.Remove_Sewage_Water')}}
                                            </button>
                                        </a> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- news & events -->
                <article class="my-4">
                    <div class="row mb-0">
                        <!-- Events -->
                        <div class="col-md-12">
                            <div class="d-flex flex-column bg-light bs-0 jsHeight">
                                <h5 class="title-text py-3 bs-1 text-center"><i class="fa fa-newspaper"></i>
                                    {{ __('messages.News') }}
                                </h5>
                                <div class="pl-3 pr-2 mt-3">
                                    <div class="news mb-3">
                                        @foreach ( $events as $event)
                                            <div class="media border-bottom">
                                                <img class="mr-2 img-fluid" alt="[150x90]" src="{{ asset('uploads/'.$event->image) }}">
                                                <div class="media-body">
                                                    <div class="d-flex">
                                                        <div class="news-date">
                                                            <div class="date-dec">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</div>
                                                            <div class="month-dec">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</div>
                                                        </div>
                                                        <div>
                                                            <h6>{{ \Illuminate\Support\Str::limit($event->desc, 100) }}
                                                                <a class="text-nowrap read-more" href="/news/{{ $event->id }}">{{ __('messages.read_more') }}</a>
                                                            </h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="text-center mt-auto mb-2">
                                    <a class="btn btn-custom btn-sm" href="/news">{{ __('messages.more_news') }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
