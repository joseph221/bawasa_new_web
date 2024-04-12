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
                                Clean Water Service
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
                                        Clean Water Service
                                    </h4>
                                    <div>
                                    <h6><b>Bawasa Water Sources</b></h6>
                                    <p>Major sources of Water in Babati Urban Water Supply and Sanitation Authority are surface streams originating
                                        mainly from Kwaraa Mountain, River Kou, springs in Bashnet and Gallapo,
                                        and ground water extracted from boreholes (e.g., Challo, Maisaka, Nangara,
                                        Bagara, Kiongozi, Himiti, Nakwa, Managhat) drilled between 70-100 meters below ground level.
                                        The Maisaka and Lake Babati water catchments in the town vicinity provide potential
                                        water fields through boreholes to the township area.</p>

                                        <p>River Kou is located in Magugu, part of Babati Babati Urban Water Supply and Sanitation Authority zones, which supplies water at Darakuta
                                            treatment plant, and boreholes at Chemchem, Mwada and Magugu ward. Gallapo water sources are
                                            Halla spring, Endanoga spring, Gedamara spring, Yaernas spring and Challo borehole. Bashnet has
                                            Bashnet Sarya, Dawite, Tlagami, Walahu and Donya surface water sources. Katesh Town has boreholes at
                                            Mogitu and Surface water source Himiti.</p>
                                        <img src="../../resourse/kisima_maisaka.jpg" alt="" srcset="" style="padding-bottom:2px;">
                                        <h6><b>Water Treatment</b></h6>
                                        <p>Water produced for distribution and consumption by Babati Urban Water Supply and Sanitation Authority meets Tanzania Bureau of Standards (TBS);
                                            however, water produced by surface water sources during rainfall season has high turbidity level and
                                            suspended materials.</p>

                                        <p>Babati Urban Water Supply and Sanitation Authority has six Water treatment plants at namely Mrara (2), Balowa and Mutuka located in Babati,
                                            Darakuta located in Magugu) and Jorodom located in Katesh. The treatment plants consist of three units namely
                                            Sedimentation, Filtration and Chlorination units.</p>
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
