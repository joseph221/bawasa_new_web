<?php

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ __('messages.Home') }} | BAWASA</title>
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/resourse/master.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/font-awesome-4.7.0/css/font-awesome.min.css">


</head>

<body wire:loading.class="opacity-50">
    <!-- header section -->
    <header style="background-image: url(./resourse/bg-image.png);">
        <div class="container">
            <div class="topbar-menu">
                <ul class=" top-bar-menu-listing">
                    <li class="list-inline-item sm-hide">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a href="/lang/{{ $lang }}" class="dropdown-item"><i
                                        class="fa fa-sign-language"></i> {{ $language }}</a>
                            @endif
                        @endforeach
                        {{-- <a class=" dropdown-toggle" id="langdropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-language"
                                ></i> {{ Config::get('languages')[App::getLocale()]}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="langdropdown">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <a href="/lang/{{$lang}}" class="dropdown-item">{{$language}}</a>
                                @endif
                            @endforeach

                        </div> --}}
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="requestservice">
                            <i class="fa fa-money-bill"></i> {{ __('messages.Request_Service') }}
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="contact_us">
                            <i class="fa fa-address-book"></i> {{ __('messages.Contact_Us') }}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="faqs">
                            <i class="fa fa-question-circle"></i> {{ __('messages.FAQs') }}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="tenders">
                            <i class="fa fa-universal-access"></i> {{ __('messages.Tenders') }}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="vacancies">
                            <i class="fa fa-users"></i> {{ __('messages.Vacancies') }}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="https://mail.bawasa.go.tz/">
                            <i class="fa fa-envelope"></i>&nbsp; {{ __('messages.Staff_Mail') }}
                        </a>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
        </div>
        <div class="banner">
            <div class="container">
                <div class=" d-flex justify-content-between align-items-center">
                    <div class="py-2  logo mx-auto">
                        <img src="assets/resourse/emblem.png" alt="emblem" class="img-fluid">
                    </div>
                    <div class="text-center mt-5 justify-content-between">
                        <h4 class="mb-0 sm-hide title">
                            {{ __('messages.ministry_of') }}</h4>
                        <h1 class="mb-1 title align-items-center">
                            {{ __('messages.bbt_heading1') }}<br /> (BAWASA)
                        </h1>
                        <!-- <p class="sm-hide title text-dec"></p> -->
                    </div>
                    <div class="py-2 logo mx-auto">
                        <a href="#">
                            <img src="./assets/resourse/logo.png" alt="Bawasa" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="baki-juu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark top_navbar p-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#smallScreenNavbar" aria-controls="smallScreenNavbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="smallScreenNavbar">
                        <ul class="navbar-nav mr-auto active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><i class="fa fa-home"></i>
                                    {{ __('messages.Home') }}</a>
                            </li>
                            <!-- ####################################################################################### -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    {{ __('messages.about_us') }}<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu drop">
                                    <li>
                                        <a class="dropdown-item" href="orgStru">{{ __('messages.org_str') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="background">{{ __('messages.History') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="mission">{{ __('messages.Mission_Vision') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="board_members">{{ __('messages.Board_Members') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="menagement">{{ __('messages.Management') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.service') }}<b class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item"
                                            href="clean_water">{{ __('messages.Clean_Water_Services') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="sanitation">{{ __('messages.Sanitation_Services') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.projects') }}
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="planned">{{ __('messages.Planned') }}</a></li>
                                    <li><a class="dropdown-item" href="excuted">{{ __('messages.excuted') }}</a></li>
                                    <li><a class="dropdown-item" href="current">{{ __('messages.current') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.publications') }}<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="guidlines">{{ __('messages.Guidelines') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="polices">{{ __('messages.Policies') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="acts">{{ __('messages.Acts') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="regulation">{{ __('messages.Regulations') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="newsletters">{{ __('messages.Newsletter') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="flyers">{{ __('messages.Flyers') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.Media_centre') }}<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item"
                                            href="pressrelease">{{ __('messages.Press_Release') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="video">{{ __('messages.Video') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="photo_web">{{ __('messages.Photo') }}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="speech">{{ __('messages.Speeches') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.office_areas') }}<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu drop" style="display: none;">
                                    <li><a class="dropdown-item" href="kateshi">{{ __('messages.Kateshi') }} </a>
                                    </li>
                                    <li><a class="dropdown-item" href="bashnet">{{ __('messages.Bashnet') }} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dareda">{{ __('messages.Dareda') }} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="gallapo">{{ __('messages.Gallapo') }} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="magugu">{{ __('messages.Magugu') }} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="babati">{{ __('messages.Babati') }} </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&to_this_inst=466$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ">{{ __('messages.e_mrejesho') }}</a>
                            </li>
                            <!-- ####################################################################################### -->
                        </ul>
                        <div class="search">
                            <!-- <button class="btn-search"><i class="fa fa-search"></i></button> -->
                            <div class="search-form">
                                <form class="form-inline py-0 mr-auto" method="GET" action="#search">
                                    <input type="hidden" name="_token"
                                        value="CjD1smmsiLMJ3siCtMPrThr9DsTeHibuTUqRWNju">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn-search pr-0" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer class="mdl-mega-footer">
        <div class="container">
            <div class="footer-middle">

                <div class="footer-dropdown">
                    <input class="footer-checkbox" type="checkbox" checked="">
                    <h4 class="footer-heading">Contact Info</h4>
                    <ul class="footer-list">
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <span>BABATI URBAN WATER SUPPLY AND SANITATION AUTHORITY - BAWASA</span>
                             <br>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            Head Offices
                            Miyomboni Street,
                            P.O.Box 245, BABATI <br>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            Telephone: +255 677025538<br>
                        </li>
                        <!-- <li>
                            Toll Free Number: 0800110023<br>
                        </li> -->
                        <!-- <li>
                            Fax: +255 282503231<br>
                        </li> -->

                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="mailto:info@bawasa.or.tz">
                                Email Address: info@bawasa.or.tz
                            </a>
                        </li>

                        <li class="list-styled-none">
                            <ul class="list-unstyled m-0 d-flex flex-wrap">
                                <li class="list-styled-none social-btn mt-3"><a href="" target="_blank"
                                        class="bg-twitter d-flex align-items-center justify-content-center"><i
                                            class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                                <li class="list-styled-none social-btn mt-3"><a href="https://www.youtube.com/results?search_query=BAWASA" target="_blank"
                                        class="bg-youtube d-flex align-items-center justify-content-center"><i
                                            class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li>
                                <li class="list-styled-none social-btn mt-3"><a href="" target="_blank"
                                        class="bg-facebook d-flex align-items-center justify-content-center"><i
                                            class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                                <li class="list-styled-none social-btn mt-3"><a href="" target="_blank"
                                        class="bg-instagram d-flex align-items-center justify-content-center"><i
                                            class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <div class="footer-dropdown">
                    <input class="footer-checkbox" type="checkbox" checked="">
                    <h4 class="footer-heading">Related Links</h4>
                    <ul class="footer-list">
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&amp;to_this_inst=504$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iq"
                                target="_blank">
                                e-mrejesho
                            </a>
                        </li>
                        <li class="">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="http://www.utumishi.go.tz/index.php/en" target="_blank">
                                Public Service Management and Good Governance
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="http://www.wcf.go.tz/" target="_blank">
                                WCF
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="https://www.ikulu.go.tz/" target="_blank">
                                Ikulu
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="http://www.ega.go.tz/" target="_blank">
                                eGA
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-dropdown">
                    <input class="footer-checkbox" type="checkbox" checked="">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-list ">

                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="https://mail.bawasa.go.tz/">Mail</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="footer-bottom">
                <ul class="list-inline text-center">

                    <li class="list-inline-item  py-2"><a href="/sitemap" class="btn btn-primary btn-sm">Sitemap</a>
                    </li>
                    <li class="list-inline-item  py-2"><a href="/privacy" class="btn btn-primary btn-sm">Privacy
                            Policy</a>
                    </li>
                    <li class="list-inline-item  py-2"><a href="/terms-and-conditions"
                            class="btn btn-primary btn-sm">Terms
                            and Conditions</a>
                    </li>
                    <li class="list-inline-item  py-2"><a href="/copyright" class="btn btn-primary btn-sm"> Copy Right
                            Statements.</a>
                    </li>
                    <li class="list-inline-item  py-2"><a href="/disclaimer" class="btn btn-primary btn-sm">
                            Disclaimer</a>
                    </li>

                </ul>
                <div class="text-center">Copyright ©<span id="copyrightDate">2019-2023</span>
                    <a href="/login">BAWASA </a> All Rights Reserved.
                    <br>
                    Imesanifiwa, Imetengenezwa, na <a href="#" target="_blank">?</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- <footer class="ega-footer pb-0 pt-4 position-relative"
        style="background-image:url(https://www.auwsa.go.tz/site/images/bg/bg_footer.svg); background-size:cover; background-repeat: no-repeat;">

        <div class="bg-gradient-with-transparent h-100 w-100 bg position-absolute top-left"> </div>

        <div class="main-container container px-lg-5">
            <div class="row pb-3">
                <div class="col-lg-6 no-padding-sm footer-content">
                    <div class="row">
                        <div class="col-md-6 text-center text-lg-left">
                            <h6 class="footer-heading d-inline-block pb-2 mb-4 border-bottom-secondary text-uppercase">
                                Wasiliana Nasi </h6>
                            <div class="my-1"> Jamhuri ya Muungano wa Tanzania </div>
                            <div class="my-1"> Mamlaka ya Majisafi na Usafi wa Mazingira Arusha </div>
                            <div class="mt-1 mb-1 py-1">S.L.P 13600,<br />
                                Arusha</div>
                            <div class="py-1 border-footer-contacts" title="Barua pepe">
                                <i class="mr-2 fs-15em far fa-envelope"></i>
                                <a href="mailto:md@auwsa.go.tz"> md@auwsa.go.tz </a>
                            </div>
                            <div class="py-1 border-footer-contacts" title="Piga Bure">
                                <i class="mr-2 fs-15em fa fa-phone"></i>
                                <a href="tel:0800110069."> 0800110069. </a>
                            </div>
                            <div class="py-1 border-footer-contacts" title="Simu">
                                <i class="mr-3 fs-15em fa fa-mobile-alt"></i>
                                <a href="tel:+255 272547186/ 2547163"> +255 272547186/ 2547163 </a>
                            </div>
                            <div class="py-1 border-footer-contacts" title="Nukushi">
                                <i class="mr-2 fs-15em fa fa-fax"></i>
                                <a href="fax:+255 272547163/ 2548981"> +255 272547163/ 2548981 </a>
                            </div>
                        </div>

                        <div class="col-md-6 no-padding-sm text-center text-lg-left">
                            <h6 class="footer-heading d-inline-block pb-2 mb-4 border-bottom-secondary text-uppercase">
                                Kurasa za Mfumo</h6>
                            <div class="pr-1 py-2"><a href="https://www.auwsa.go.tz/pages/water-services"> Bei za maji
                                    safi </a></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 px-0 px-xs-2 m-0 footer-content">
                    <div class="row px-xs-2 pb-0 mb-0">
                        <div class="col-md-6 no-padding-sm text-center text-lg-left">
                            <h6 class="footer-heading d-inline-block pb-2 mb-4 border-bottom-secondary text-uppercase">
                                Tovuti Mashuhuri</h6>
                            <div class="pr-1 py-2"><a target="_blank" rel="noopener noreferrer"
                                    href="https://www.maji.go.tz/"> Wizara ya Maji </a></div>
                            <div class="pr-1 py-2"><a target="_blank" rel="noopener noreferrer"
                                    href="https://www.ruwasa.go.tz/"> RUWASA </a></div>
                        </div>


                        <div class="col-md-6 no-padding-sm text-center mt-4 mt-md-0 text-lg-left">
                            <h6 class="footer-heading d-inline-block pb-2 mb-4 border-bottom-secondary text-uppercase">
                                Takwimu za Wageni</h6>

                            <div class="rounded-slight border  p-2">
                                <a class="d-block py-2 pr-1" href="javascript::">
                                    <div class="d-inline-block mr-2"><i class="fa fa-users mr-1"></i>
                                        Idadi ya wageni katika Siku: </div>
                                    <div class="d-inline-block text-secondary" id="today">0</div>
                                </a>
                                <a class="d-block py-2 pr-1" href="javascript::">
                                    <div class="d-inline-block mr-2"><i class="fa fa-chart-bar mr-1"></i>
                                        Idadi ya wageni katika Wiki: </div>
                                    <div class="d-inline-block text-secondary" id="week">0</div>
                                </a>
                                <a class="d-block py-2 pr-1" href="javascript::">
                                    <div class="d-inline-block mr-2"><i class="fa fa-chart-area mr-1"></i>
                                        Idadi ya wageni katika Mwezi: </div>
                                    <div class="d-inline-block text-secondary" id="month">0</div>
                                </a>
                                <a class="d-block py-2 pr-1" href="javascript::">
                                    <div class="d-inline-block mr-2"><i class="fa fa-globe-africa mr-1"></i>
                                        Jumla ya Idadi ya Wageni wa Muda Wote: </div>
                                    <div class="d-inline-block text-secondary" id="all">0</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 footer-content p-0 container my-3">
                <div class=" footer-media text-center pb-0 mb-0">
                    <a href="https://www.facebook.com/people/AUWSA/100069193120378/" target="_blank"
                        rel="noopener noreferrer"><i class="fab icon fa-facebook-f px-2" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><i
                            class="fab icon fa-twitter  px-2" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/auwsa_/" target="_blank" rel="noopener noreferrer"><i
                            class="fab icon fa-instagram  px-2" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCCzIQPDEtpH8XY0j09Ts0QQ" target="_blank"
                        rel="noopener noreferrer"><i class="fab icon fa-youtube  px-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="site-info bg-primary-dark  border-top border-secondary position-relative z-index-2">
            <div class="col-md-12 pl-0 list no-padding-sm text-center  footer-links footer-nav p-3">
                <ul class="list-inline mb-0">
                    <li class='list-inline-item'><a href='https://www.auwsa.go.tz/sitemap'>Ramani ya Tovuti</a></li>
                    <li class='list-inline-item'><a href='#'>haki Miliki</a></li>
                    <li class='list-inline-item'><a href='#'>Vigezo na Masharti</a></li>
                    <li class='list-inline-item'><a href='#'>Kanusho</a></li>
                    <li class='list-inline-item'><a href='https://www.auwsa.go.tz/pages/privacy-policy'>Sera ya
                            Faragha</a></li>
                </ul>
            </div>


            <div class="copyright text-white-50 p-3 footer-nav">
                <div class="text-center my-1">
                    Imesanifiwa na Imetengenezwa na
                    <a href="https://www.ega.go.tz" class="" rel="noopener noreferrer" target="_blank">Mamlaka
                        ya Serikali Mtandao</a>
                    Huendeshwa na Mamlaka ya Majisafi na Usafi wa Mazingira Arusha
                </div>

                <div class="text-white-50 text-center">
                    © 2024 AUWSA, Haki zote zimehifadhiwa.
                </div>
            </div>
        </div>
    </footer> --}}
    @livewireScripts

    @stack('scripts')
</body>
<!-- script -->
<script>
    let currentYear = new Date().getFullYear();
    let startYear = 2023;
    if (currentYear != startYear) {
        document.getElementById('copyrightDate').innerHTML = (startYear + "-" + new Date().getFullYear());
    } else {
        document.getElementById('copyrightDate').innerHTML = (new Date().getFullYear());
    }
</script>

<script src="./assets/resourse/jquery.min.js"></script>
<script src="./assets/resourse/client.min.js"></script>
<script src="./assets/resourse/visitors.logs.js"></script>
<script src="./assets/resourse/nprogress.min.js"></script>
<script src="./assets/resourse/bootstrap.bundle.min.js"></script>
<script src="./assets/resourse/matchHeight.min.js"></script>
<script src="./assets/resourse/customScrollbar.min.js"></script>
<script src="./assets/resourse/slick.min.js"></script>
<script src="./assets/resourse/custom.min.js"></script>
<script src="./assets/resourse/recaptcha__en.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
@livewireScripts
<script>
    $('a.dropdown-item.dropdown-toggle').click(function() {
        const link = $(this).attr('href');
        if (link) {
            window.open(link, '_self')
        }
    });

    var default_lang = $('.languages-available a.dropdown-item:first-child');

    function dropdown_langSet(val) {
        if (val.innerHTML != "") {
            $('#dropdown_lang').val(val.innerHTML);
            $('#dropdown_lang').html(val.innerHTML);
        } else {
            $('#dropdown_lang').val('');
            $('#dropdown_lang').html(default_lang);
        }
    }
</script>

</html>
