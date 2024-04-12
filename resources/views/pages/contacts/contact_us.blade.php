@extends('layouts.website_master')
<!-- header section -->

@section('content')
<!-- <div class="spinner-border"></div> -->

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
                            Contact Us
                        </li>
                    </ol>
                </div>
            </nav>

            <div class="content-border">
                @include("layouts.sidecontent")

                <div class="sub-main-content js-sub-main-height" style="height: 586.312px">
                    <livewire:contact-us />
                </div>
            </div>
            <!--/sub-main-content -->
        </section>
    </div>
</div>
@endsection
