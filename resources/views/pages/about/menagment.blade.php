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
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4">
                                        <div class="profile text-center">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="160">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/82">Prof.
                                                    Jamal
                                                    Katundu</a></p>
                                            <p class="my-1">Katibu Mkuu</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other Members #Loop -->
                                <!-- <div class="row justify-content-md-center">
                                    <div class="col-md-8">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/thumb-1694588555-naibu km.jpeg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/18">Eng. Mwajuma
                                                    Waziri</a></p>
                                            <p class="my-1">Naibu Katibu Mkuu</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row justify-content-md-center">

                                </div>
                                <div class="row justify-content-md-center">
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/20">Dkt.
                                                    George
                                                    Lugomela</a></p>
                                            <p class="my-1">Mkurugenzi Rasilimali za Maji</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/34">Eng.
                                                    Dorisia
                                                    Mulashani</a></p>
                                            <p class="my-1">Mkurugenzi wa Kitengo cha Uandaaji, Uratibu na Usimamizi wa
                                                Mazingira</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/37">CPA
                                                    (T)
                                                    Ahadi Msangi</a></p>
                                            <p class="my-1">Mhasibu Mkuu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="140">
                                            <p class="mb-1"><a
                                                    href="https://www.maji.go.tz/administration/list/40">Florence
                                                    Lawrence</a></p>
                                            <p class="my-1">Mkuu wa Kitengo cha Mawasiliano Serikalini</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632814809-9.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/41">Simon
                                                    Nkanyemka</a></p>
                                            <p class="my-1">Mkurugenzi Kitengo cha Sheria</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1666335439-Eng Christian edited2.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/42">Eng.
                                                    Christian William</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi, Usafi wa Mazingira</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid"
                                                width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/44">Eng.
                                                    Lyidia
                                                    Joseph</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Ufuatiliaji na Utoaji Huduma</p>
                                        </div>
                                    </div>

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
