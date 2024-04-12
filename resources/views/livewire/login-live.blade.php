

    <link rel="stylesheet"
            href="./Government Mailing System __ Welcome to Government Mailing System_files/bootstrap.min.css">
    <link rel="stylesheet"
            href="./Government Mailing System __ Welcome to Government Mailing System_files/bootstrap-icons.css">

    <link rel="stylesheet" href="./assets/resourse/auth.min.css">
    <link rel="stylesheet" href="./assets/resourse/master.min.css">


    <div class="new-auth text-quicksand w-100">
        <div class="container">
            <div class="d-block mx-lg-5 my-2">
                <div class="d-block size-login mx-auto scale-up" style="--order: 4">

                    <div class="row mx-0 login-background shadow-primary-darker rounded-medium">

                        <div class="col-lg-6 px-0 d-none d-lg-block">
                            <div class="auth-adds d-flex h-100 align-items-center">
                                <div class="col h-100 px-0">
                                    <div class="add-content h-100">

                                        <div class="carousel carousel-fade slide h-100" data-bs-ride="carousel"
                                            id="gmsCarouselControls">
                                            <div class="carousel-inner h-100">

                                                <div class="carousel-item">
                                                    <div class="full-hd">
                                                        <a href="https://www.pdpc.go.tz/">
                                                            <img alt="" class="d-block w-100"
                                                                src="./Government Mailing System __ Welcome to Government Mailing System_files/GMS Swahili.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="full-hd">
                                                        <a href="https://www.pdpc.go.tz/">
                                                            <img alt="" class="d-block w-100"
                                                                src="./Government Mailing System __ Welcome to Government Mailing System_files/GMS English.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="carousel-item active">
                                                    <div class="full-hd">
                                                        <a href="https://apchotelandconferencecentre.co.tz/">
                                                            <img alt="" class="d-block w-100"
                                                                src="./Government Mailing System __ Welcome to Government Mailing System_files/APC.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="full-hd">
                                                        <a href="https://www.ppra.go.tz/">
                                                            <img alt="" class="d-block w-100"
                                                                src="./Government Mailing System __ Welcome to Government Mailing System_files/PPRA.jpg">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <button class="carousel-control-prev btn btn-secondary" data-bs-slide="prev"
                                                data-bs-target="#gmsCarouselControls" type="button">
                                                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                                <!--												<span class="sr-only">Previous</span>-->
                                            </button>
                                            <button class="carousel-control-next btn btn-secondary" data-bs-slide="next"
                                                data-bs-target="#gmsCarouselControls" type="button">
                                                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                                <!--												<span class="sr-only">Next</span>-->
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-2">
                            <div class="d-flex h-100 justify-content-center align-items-center move-right"
                                style="--order: 6">
                                <div class="my-auto mx-auto auth-card w-100">
                                    <div class="w-100 text-center auth-card-header">
                                        <img class="app-logo"
                                            src="./assets/resourse/logo.png"
                                            width="85">
                                        <div class="py-2">
                                            <h5 class="m-0 p-0 fw-bold">
                                                (BAWASA)
                                            </h5>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-floating mb-2">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            <input autocapitalize="off" autocomplete="off" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-floating">
                                            <label for="password">{{ __('Password') }}</label>
                                                <input autocapitalize="off" autocomplete="off" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                        </div>

                                        <div class="form-floating">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="text-center py-2 mt-2 copyright">
                        <small> <span class="supportteam">For any Technical inquiry, Please contact your ICT Support
                                Team at : <span
                                    style="unicode-bidi: bidi-override;direction: rtl;">@troppustci</span>bawasa.go.tz</span>
                        </small>
                        <small>
                            <p class="loginCopyright">Copyright © 2014 - 2024 e-Government Authority. All Rights
                                Reserved | GMS Version 4.0.0</p>
                        </small>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

