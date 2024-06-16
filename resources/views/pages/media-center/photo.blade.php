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
                                {{ __('messages.Photo') }}
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include('layouts.sidecontent')

                    <div class="sub-main-content js-sub-main-height" style="height: 584.312px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="title-decoration py-2 mb-3">
                                        {{ __('messages.Photo') }}
                                    </h4>
                                    <div>
                                        <ul class="photo-listing list-unstyled clearfix">

                                            @foreach ( $photo as $d )
                                                <li class="galleria mb-3 d-md-flex">
                                                    <div class="mr-3">
                                                        <a href="/uploads/photo/{{ $d->image }}"
                                                            class="gallery-item d-flex align-items-center justify-content-center"
                                                            title="Naibu Katibu Mkuu Wizara ya Maji, Mhandisi Anthony Sanga (aliyekaa kulia) na Kaimu Mkurugenzi Mtendaji wa Mamlaka ya Majisafi na Usafi wa Mazingira Jijini Mwanza (MWAUWASA), Mhandisi Leonard ">
                                                            <img src="{{ asset('uploads/photo/' . $d->image) }}"
                                                                alt="Naibu Katibu Mkuu Wizara ya Maji, Mhandisi Anthony Sanga (aliyekaa kulia) na Kaimu Mkurugenzi Mtendaji wa Mamlaka ya Majisafi na Usafi wa Mazingira Jijini Mwanza (MWAUWASA), Mhandisi Leonard ">
                                                            <span class="position-absolute text-light"><i
                                                                    class="fa fa-camera"></i> 1</span>
                                                        </a>

                                                    </div>
                                                    <div class="mt-3 mt-md-0">
                                                        <p class="mb-1">{{ $d->desc }}</p>
                                                        <p class="date">Posted On : <i class="fa fa-calendar"></i> November,
                                                            26, 2019
                                                        </p>

                                                    </div>
                                                </li>
                                            @endforeach


                                        </ul>
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
    </div>
@endsection
