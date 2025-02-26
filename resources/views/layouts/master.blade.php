<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange"><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="/dashboard" class="simple-text logo-mini">
            <img src="../assets/img/logo.png" alt="" srcset="">
        </a>
        <a href="/dashboard" class="simple-text logo-normal">
          BAWASA
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'dashboard' == request()->path() ? 'active' : ''}}">
            <a href="../dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./contacts">
              <i class="now-ui-icons education_atom"></i>
              <p>Contact Us</p>
            </a>
          </li>
          <li class="{{ 'photo' == request()->path() ? 'active' : ''}}">
            <a href="/photo">
              <i class="now-ui-icons location_map-big"></i>
              <p>Photo</p>
            </a>
          </li>
          <li class="{{ 'board' == request()->path() ? 'active' : ''}}">
            <a href="/board">
              <i class="now-ui-icons users_single-02"></i>
              <p>Board</p>
            </a>
          </li>

          @can('view user')
            <li class="{{ 'users' == request()->path() ? 'active' : ''}}">
                <a href="../users">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Management</p>
                </a>
            </li>
          @endcan
          <li class="{{ 'events' == request()->path() ? 'active':''}}">
            <a href="../events">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Events</p>
            </a>
          </li>
          <li class="{{ 'anouncement' == request()->path() ? 'active' : ''}}">
            <a href="../anouncement">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Anouncement</p>
            </a>
          </li>
          <li class="{{ 'press' == request()->path() ? 'active' : ''}}">
            <a href="../press">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Press Release</p>
            </a>
          </li>
          <li class="{{ 'request_service' == request()->path() ? 'active' : ''}}">
            <a href="../request_service">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Connection request</p>
            </a>
          </li>

          <li class="{{ 'administration' == request()->path() ? 'active' : ''}}">
            <a href="../administration">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Administration</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="./dashboard">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            {{-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> --}}
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> --}}
              {{-- <li class="nav-item dropdown" id="markasread" onclick="markNotificationAsread()"> --}}
                <li class="nav-item dropdown" id="markasread" onclick="markNotificationAsread()">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                    <span class="badge-lg">{{ count(auth()->user()->unreadNotifications) }}</span>
                  {{-- <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    {{-- @foreach (auth()->user()->unreadNotifications as $notification )
                    <span>@include('admin.notifications.'.Str::snake(class_basename($notification->type)))</span>
                    @endforeach --}}
                  <a class="dropdown-item" href="/notification2">Request Service Notifications</a>
                  <a class="dropdown-item" href="/notification">Contact us Notifications</a>

                </div>
              </li>
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="#navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

        @yield('content')
        @include('sweetalert::alert')
      </div>
      <footer class="footer">
        <div class=" container-fluid ">

          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="" target="_blank">?</a>. Coded by <a href="" target="_blank">?</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="../assets/js/dashmain.js"></script>
  <script>
    // Show the progress bar
    function showProgressBar() {
    $('#progress-bar').show();
  }

  // Hide the progress bar
  function hideProgressBar() {
    $('#progress-bar').hide();
  }
  </script>

    @yield('scripts')
    @livewireScripts

    @stack('scripts')
</body>

</html>
