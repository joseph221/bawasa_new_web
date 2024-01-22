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

                <div class="sub-main-content js-sub-main-height">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="title-decoration text-capitalize py-2 mb-3"> Board Members</h4>
                            <div class="management">
                                <!-- NOTE: Head of Management  -->
                                <div class="row justify-content-md-center">
                                    <div class="col-md-4">
                                        <div class="profile text-center">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/thumb-1693554460-prof Jamal Katundu KM.jpg"
                                                alt="" class="img-fluid" width="160">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/82">Prof.
                                                    Jamal
                                                    Katundu</a></p>
                                            <p class="my-1">Katibu Mkuu</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other Members #Loop -->
                                <div class="row justify-content-md-center">
                                    <div class="col-md-8">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/thumb-1694588555-naibu km.jpeg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/18">Eng.
                                                    Mwajuma
                                                    Waziri</a></p>
                                            <p class="my-1">Naibu Katibu Mkuu</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">

                                </div>
                                <div class="row justify-content-md-center">
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="../../resourse/org.png" alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/20">Dkt.
                                                    George
                                                    Lugomela</a></p>
                                            <p class="my-1">Mkurugenzi Rasilimali za Maji</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692854979-mulashani.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/34">Eng.
                                                    Dorisia
                                                    Mulashani</a></p>
                                            <p class="my-1">Mkurugenzi wa Kitengo cha Uandaaji, Uratibu na Usimamizi wa
                                                Mazingira</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813635-12.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/37">CPA (T)
                                                    Ahadi Msangi</a></p>
                                            <p class="my-1">Mhasibu Mkuu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813527-5.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/40">Florence
                                                    Lawrence</a></p>
                                            <p class="my-1">Mkuu wa Kitengo cha Mawasiliano Serikalini</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632814809-9.jpg" alt=""
                                                class="img-fluid" width="140">
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
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632814854-10.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/44">Eng.
                                                    Lyidia
                                                    Joseph</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Ufuatiliaji na Utoaji Huduma</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692951079-buchafwe.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/47">Prosper
                                                    Buchafwe</a></p>
                                            <p class="my-1">Mkurugenzi Sera na Mipango</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813505-0.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/48">Rosemary
                                                    Rwebugisa</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi, Kutunza na Kuhifadhi Rasilimali za Maji</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813359-1.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/51">Joash
                                                    Nyitambe</a></p>
                                            <p class="my-1">Mkuu wa Kitengo cha TEHAMA</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692854757-tarimo.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/52">Alex
                                                    Tarimo</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Sera, Tafiti na Ubunifu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813329-11.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/53">CPA (T)
                                                    Paul
                                                    Temba</a></p>
                                            <p class="my-1">Mkaguzi Mkuu wa Ndani</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813310-4.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/55">Dkt.
                                                    Christopher Nditi</a></p>
                                            <p class="my-1">Mkurugenzi Kitengo cha Manunuzi</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692951050-Tedy.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/56">Teddy
                                                    Mwaijumba</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi, Mipango na Bajeti</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1632813281-7.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/57">Pamella
                                                    Temu</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Mipango, Ufuatiliaji na Tathmini</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692707357-IMG-20230822-WA0086.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/60">Wanyenda
                                                    Kutta</a></p>
                                            <p class="my-1">Mkurugenzi wa Utawala na Rasilimaliwatu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1634816527-1.jpg" alt=""
                                                class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/62">CPA (T)
                                                    Joyce Msiru</a></p>
                                            <p class="my-1">Mkurugenzi wa Idara ya Usambazaji Maji na Usafi wa Mazingira.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1666336647-Chiusute edited.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/64">Mteki
                                                    Chisute</a></p>
                                            <p class="my-1">Mkurugenzi Huduma za Ubora wa Maji</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692854598-mafie.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/68">Eng.
                                                    Charles
                                                    Mafie</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Uendeshaji na Matengenezo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1673255915-Monica.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/70">Monica
                                                    Mushi</a></p>
                                            <p class="my-1">Kaimu Mkurugenzi Msaidizi Udhibiti Ubora na viwango vya Maji</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1693931805-dwq-PhotoRoom.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/72">Abeid G.
                                                    Kiangi</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Idara ya Huduma za Ubora wa Maji, Sehemu ya
                                                ushauri wa Kitaalamu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692784046-sunday12.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/74">Robert
                                                    K.M
                                                    Sunday</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi Rasilimali za Maji (Majishirikishi)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1692855755-diana.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/76">Diana F.
                                                    Kimario</a></p>
                                            <p class="my-1">Kaimu Mkurugenzi, Ufuatiliaji na Tathmini</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1693210782-mary.jpg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/80">Mary
                                                    Ntira</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi, Rasilimali Watu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile text-center mt-3">
                                            <img src="./Menejimenti _ Wizara ya Maji_files/medium-1696596220-kingazi.jpeg"
                                                alt="" class="img-fluid" width="140">
                                            <p class="mb-1"><a href="https://www.maji.go.tz/administration/list/84">​Jacob
                                                    Herbert Kingazi</a></p>
                                            <p class="my-1">Mkurugenzi Msaidizi - Utawala</p>
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