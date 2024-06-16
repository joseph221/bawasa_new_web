@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="container">
        <section class="main-content mb-2">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb py-0 mb-2">
                    <li class="breadcrumb-item"><a href="https://www.maji.go.tz/"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active text-capitalize" aria-current="page">administration</li>
                </ol>
            </nav>
            <div class="content-border">

                <div class="sub-main-content js-sub-main-height" style="min-height: 647.55px">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="title-decoration text-capitalize py-2 mb-3"> {{ __('messages.Management')}}</h4>
                            <div class="management">
                                <!-- NOTE: Head of Management  -->
                                @if ($md)
                                <div class="row mx-0 my-3 justify-content-center border-bottommmmm">
                                    <div class="col-12 col-sm-6 col-md-3 text-center py-3">
                                        <a href="" title="Tazama Wasifu" class="d-block w-100 shadow rounded bg-white zoom-container">
                                            <div class="text-center overflow-hidden p-3">
                                                <img src="{{ asset('uploads/administration/'.$md->img) }}" alt="Justine G. Rujomba photo"
                                                     class="img-fluid rounded-circle image" style="width:100%; max-width:150px">
                                            </div>
                                            <div class="py-2">
                                                <h6 class="text-bold text-primary">{{ $md->Acdmc_proff_title }} {{ $md->full_name }}</h6>
                                                <p class="text-faded mb-1 bold-600">{{ $md->position }}</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                @endif


                                <!-- Head Of Department #Loop -->
                                <div class="row mx-0 my-3 justify-content-center border-bottommmmm">
                                    @foreach ($hd as $d )
                                    <div class="col-12 col-sm-6 col-md-3 text-center py-3">
                                        <a href="" title="Tazama Wasifu" class="d-block w-100 shadow rounded bg-white zoom-container">
                                            <div class="text-center overflow-hidden p-3">
                                                <img src="{{ asset('uploads/administration/'.$d->img) }}" alt="Ismail M. Lutindi photo"
                                                     class="img-fluid rounded-circle image" style="width:100%; max-width:150px">
                                            </div>
                                            <div class="py-2">
                                                <h6 class="text-bold text-primary">{{ $d->Acdmc_proff_title }} {{ $d->full_name }}</h6>
                                                <p class="text-faded mb-1 bold-600">{{ $d->position }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Head Of Units #Loop -->
                                <div class="row mx-0 my-3 justify-content-center border-bottommmmm">
                                    @foreach ($hu as $d )
                                    <div class="col-12 col-sm-6 col-md-3 text-center py-3">
                                        <a href="" title="Tazama Wasifu" class="d-block w-100 shadow rounded bg-white zoom-container">
                                            <div class="text-center overflow-hidden p-3">
                                                <img src="{{ asset('uploads/administration/'.$d->img) }}" alt="Ismail M. Lutindi photo"
                                                     class="img-fluid rounded-circle image" style="width:100%; max-width:150px">
                                            </div>
                                            <div class="py-2">
                                                <h6 class="text-bold text-primary">{{ $d->Acdmc_proff_title }} {{ $d->full_name }}</h6>
                                                <p class="text-faded mb-1 bold-600">{{ $d->position }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--/sub-main-content -->
                    </div>
                </div>
            </div>
            <!--/sub-main-content -->

        </section>
    </div>
@endsection
