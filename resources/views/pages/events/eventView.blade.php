@extends('layouts.website_master2')
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
                                {{ __('messages.News') }}
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include('layouts.sidecontent')

                    <div class="sub-main-content js-sub-main-height" style="height: 584.312px">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="title-decoration py-2 mb-3"> {{ __('messages.News') }}</h4>
                                <div>
                                    <div class="date clearfix mb-2">
                                        <span class="float-right">
                                            posted on:
                                            <i class="fa fa-calendar"></i>
                                            {{ \Carbon\Carbon::parse($newsById->date)->format('M d, Y') }}
                                        </span>
                                    </div>
                                    <h4 class="text-center">{{ $newsById->title }}</h4>
                                    <div class="news-image text-center mb-3">
                                        <img src="{{ asset('uploads/'.$newsById->image) }}" alt="News Images" class="img-fluid">
                                    </div>
                                    <div class="news-content">
                                        <p></p><p>{{ $newsById->desc }}</p><p></p>
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
