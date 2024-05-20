<?php



?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ __('messages.Home')}} | BAWASA</title>
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/resourse/master.min.css">
    {{-- <link rel="stylesheet" href="../../assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css"> --}}
    <link rel="stylesheet" href="../../assets/font-awesome-4.7.0/css/font-awesome.min.css">


    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body wire:loading.class="opacity-50">
    <!-- header section -->
    <header style="background-image: url(../../resourse/bg-image.png);">
        <div class="container">
            <div class="topbar-menu">
                <ul class=" top-bar-menu-listing">
                    <li>
                        <a class=" dropdown-toggle" id="langdropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-language"
                                ></i> {{ Config::get('languages')[App::getLocale()]}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="langdropdown">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if($lang != App::getLocale())
                                <a href="/lang/{{$lang}}" class="dropdown-item">{{$language}}</a>
                                @endif
                            @endforeach

                        </div>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="requestservice">
                            <i class="fa fa-money-bill"></i> {{ __('messages.Request_Service')}}
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="contact_us">
                            <i class="fa fa-address-book"></i> {{ __('messages.Contact_Us')}}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="faqs">
                            <i class="fa fa-question-circle"></i> {{ __('messages.FAQs')}}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="tenders">
                            <i class="fa fa-universal-access"></i> {{ __('messages.Tenders')}}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="vacancies">
                            <i class="fa fa-users"></i> {{ __('messages.Vacancies')}}
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="https://mail.bawasa.go.tz/">
                            <i class="fa fa-envelope"></i>&nbsp; {{ __('messages.Staff_Mail')}}
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
                        <img src="../../assets/resourse/emblem.png" alt="emblem" class="img-fluid">
                    </div>
                    <div class="text-center mt-5 justify-content-between">
                        <h4 class="mb-0 sm-hide title">
                        {{ __('messages.ministry_of')}}</h4>
                        <h1 class="mb-1 title align-items-center">
                        {{ __('messages.bbt_heading1')}}<br /> (BAWASA)
                        </h1>
                        <!-- <p class="sm-hide title text-dec"></p> -->
                    </div>
                    <div class="py-2 logo mx-auto">
                        <a href="#">
                            <img src="../../assets/resourse/logo.png" alt="Bawasa" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="baki-juu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark top_navbar p-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#smallScreenNavbar"
                        aria-controls="smallScreenNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="smallScreenNavbar">
                        <ul class="navbar-nav mr-auto active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><i class="fa fa-home"></i> {{ __('messages.Home')}}</a>
                            </li>
                            <!-- ####################################################################################### -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                {{ __('messages.about_us')}}<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu drop">
                                    <li>
                                        <a class="dropdown-item"
                                            href="/orgStru">{{ __('messages.org_str')}}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="/background">{{ __('messages.History')}}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/mission">{{ __('messages.Mission_Vision')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="board">{{ __('messages.Board_Members')}}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/menagement">{{ __('messages.Management')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('messages.service')}}<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="/clean_water">{{ __('messages.Clean_Water_Services')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/sanitation">{{ __('messages.Sanitation_Services')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.projects')}}
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="/planned">{{ __('messages.Planned')}}</a></li>
                                    <li><a class="dropdown-item" href="/excuted">{{ __('messages.excuted')}}</a></li>
                                    <li><a class="dropdown-item" href="/current">{{ __('messages.current')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.publications')}}<b class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="/guidlines">{{ __('messages.Guidelines')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="polices">{{ __('messages.Policies')}}</a></li>
                                    <li><a class="dropdown-item" href="/acts">{{ __('messages.Acts')}}</a></li>
                                    <li><a class="dropdown-item"
                                            href="regulation">{{ __('messages.Regulations')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/newsletters">{{ __('messages.Newsletter')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/flyers">{{ __('messages.Flyers')}}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.Media_centre')}}<b class="caret"></b></a>
                                <ul class="dropdown-menu drop">
                                    <li><a class="dropdown-item" href="/press">{{ __('messages.Press_Release')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/video">{{ __('messages.Video')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/photo">{{ __('messages.Photo')}}</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/speech">{{ __('messages.Speeches')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">{{ __('messages.office_areas')}}<b class="caret"></b></a>
                                <ul class="dropdown-menu drop" style="display: none;">
                                    <li><a class="dropdown-item" href="/kateshi">{{ __('messages.Kateshi')}} </a>
                                    </li>
                                    <li><a class="dropdown-item" href="/bashnet">{{ __('messages.Bashnet')}} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/dareda">{{ __('messages.Dareda')}} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/gallapo">{{ __('messages.Gallapo')}} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/magugu">{{ __('messages.Magugu')}} </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/babati">{{ __('messages.Babati')}} </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&to_this_inst=466$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ">{{ __('messages.e_mrejesho')}}</a>
                            </li>
                            <!-- ####################################################################################### -->
                        </ul>
                        <div class="search">
                            <!-- <button class="btn-search"><i class="fa fa-search"></i></button> -->
                            <div class="search-form">
                                <form class="form-inline py-0 mr-auto" method="GET" action="#search">
                                    <input type="hidden" name="_token" value="CjD1smmsiLMJ3siCtMPrThr9DsTeHibuTUqRWNju">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn-search pr-0" type="submit"><i class="fa fa-search"></i></button>
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
                            BABATI URBAN WATER SUPPLY AND SANITATION AUTHORITY - BAWASA <br>
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
                                <li class="list-styled-none social-btn mt-3"><a href="" target="_blank"
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
                        <li>
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
                        <li class="list-styled-none more-link"><a href="#relatedlinks">More
                                <i class="fa fa-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <!-- <div class="footer-dropdown">
            <input class="footer-checkbox" type="checkbox" checked="">
            <h4 class="footer-heading">Visitors Counter</h4>
            <ul class="footer-list list-styled ">
                <ul class="fa-ul mb-0">
                    <li class="list-styled-none">
                        <i class="fa-li fa fa-users"></i> Today : <span id="today">24</span></li>
                    <li class="list-styled-none">
                        <i class="fa-li fa fa-users"></i> Yesterday : <span id="yesterday">18</span></li>
                    <li class="list-styled-none">
                        <i class="fa-li fa fa-users"></i> This Week : <span id="week">138</span>
                    </li>
                    <li class="list-styled-none">
                        <i class="fa-li fa fa-users"></i> This Month : <span id="month">1,662</span>
                    </li>
                    <li class="list-styled-none">
                        <i class="fa-li fa fa-users"></i> Total : <span id="all">21,335</span></li>
                </ul>
            </ul>
        </div> -->

                <div class="footer-dropdown">
                    <input class="footer-checkbox" type="checkbox" checked="">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-list ">

                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Mail</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">ERMS</a>
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
                    <a href="{{ route('login') }}">BAWASA </a> All Rights Reserved.
                    <br>
                    Imesanifiwa, Imetengenezwa, na <a href="#" target="_blank">?</a>
                </div>
            </div>
        </div>
    </footer>

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

<script src="../../assets/resourse/jquery.min.js"></script>
<script src="../../assets/resourse/client.min.js"></script>
<script src="../../assets/resourse/visitors.logs.js"></script>
<script src="../../assets/resourse/nprogress.min.js"></script>
<script src="../../assets/resourse/bootstrap.bundle.min.js"></script>
<script src="../../assets/resourse/matchHeight.min.js"></script>
<script src="../../assets/resourse/customScrollbar.min.js"></script>
<script src="../../assets/resourse/slick.min.js"></script>
<script src="../../assets/resourse/custom.min.js"></script>
<script src="../../assets/resourse/recaptcha__en.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
@livewireScripts

@stack('scripts')
</html>
