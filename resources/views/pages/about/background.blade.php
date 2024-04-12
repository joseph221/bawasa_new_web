@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="content-layout" style="min-height: 269.546px">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->

            <section class="main-content mb-2">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb py-1 mb-0">
                            <li class="breadcrumb-item">
                                <a href="/"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('messages.History')}}
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include("layouts.sidecontent")

                    <div class="sub-main-content js-sub-main-height" style="height: 586.312px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="title-decoration py-2 mb-3"> {{ __('messages.History')}}</h4>
                                    <div>
                                        <h5>A little history about us:</h5>
                                        <p style="text-align: justify">
                                            Babati Urban Water Supply And Sanitation Authority
                                            (BAWASA) is an autonomous Government organization
                                            responsible for provisional of water supply and sanitation
                                            services for the residents of Babati Town and
                                            townships of Gallapo, Dareda, Magugu, Bashnet and Katesh.
                                            Babati Town is the Headquarter of Manyara Region located at
                                            the junction of Dodoma, Arusha and Singida highways.
                                        </p>
                                        <p style="text-align: justify">
                                            Babati Water Supply And Sanitation Authority was
                                            officially established on 23-12-2002 by
                                            the Minister responsible for Water and its first Board of
                                            Directors was appointed in February 2004. This is in accordance with
                                            Water Works Act No. 8 of 1997 as repealed by Water Act No. 12 of 2009
                                            and as repealed in Act No. 5 of 2019 requiring establishment of autonomous
                                            water entities in urban areas of Tanzania. BABATI Water Supply and
                                            sanitation Authority started operations
                                            in March 2004. Babati Water Supply and sanitation Authority is a Category “C”
                                            Water Supply and
                                            sanitation Authority.
                                            Although BABATI Water Supply and sanitation Authority is a Category “C” Water
                                            Supply and
                                            sanitation Authority, it is required to m
                                            eet all Operation and Maintenance (O&M) costs through its internal income.
                                            Babati Water Supply and sanitation Authority was clustered with Magugu, Gallapo,
                                            Bashnet
                                            and Dareda by GN 662 of 6th September 2019 and later was
                                            clustered with Katesh through letter Referenced BC.239/303/05/05A/62 dated
                                            3rdAugust 2021
                                        </p>
                                        <p style="text-align: justify">
                                            Babati Urban Water Supply And Sanitation Authority
                                            (BAWASA) is accountable to a Board of Directors and the day-to-day activities
                                            are managed
                                            by the Managing Director. Under the Managing Director, there are four
                                            departments namely,
                                            Technical, Finance, Administration and Business Departments. The Internal Audit
                                            Unit,
                                            Procurement Management Unit and Information Communication Technology which also
                                            report
                                            directly to the Managing Director, while the Public Relations Unit is currently
                                            operating
                                            under the Business Department.
                                        </p>
                                        <p style="text-align: justify">
                                            Babati WSSA is regulated by EWURA, PPRA and Treasury Registrar and follows all
                                            laws, regulations
                                            and policies concerning water supply and sanitation services as well as other
                                            related issues.
                                        </p>

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
