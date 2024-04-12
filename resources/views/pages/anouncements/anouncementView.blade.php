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
                            {{ __('messages.Anouncements')}}
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
                                    {{ __('messages.Anouncements')}}
                                </h4>
                                <div>
                                    <div class="pb-2 more-info">
                                        <h6 class="mb-1">{{ $anounceById->title }}</h6>
                                        <p class="mb-2"><p>{{ $anounceById->content }}<br />
                                        </p>
                                        <p class="date mb-1">
                                          Posted On:
                                          <i class="fa fa-calendar"></i>
                                          {{ \Carbon\Carbon::parse($anounceById->date)->format('M d, Y') }}
                                        </p>
                                      </div>
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

