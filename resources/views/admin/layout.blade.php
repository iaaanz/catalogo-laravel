<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title></title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('plugins/images/favicon.png')}}">
  <link href="{{asset('plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
  <link href="{{asset('css/style_dashboard.min.css')}}" rel="stylesheet">
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <a class="navbar-brand" href="/test/dashboard">
            <b class="logo-icon">
              {{-- <img src="{{asset('plugins/images/logo-icon.png')}}" alt="homepage" /> --}}
            </b>
            <span class="logo-text">
              <img src="{{asset('plugins/images/logo-text.png')}}" alt="homepage" />
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li>
              <a class="profile-pic" href="#">
                <img src="user-image" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">$user->name</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item pt-2">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.dashboard')}}" aria-expanded="false">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.conta')}}" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="hide-menu">Conta</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/test/categories" aria-expanded="false">
                <i class="fa fa-table" aria-hidden="true"></i>
                <span class="hide-menu">Categorias</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.product.index')}}" aria-expanded="false">
                <i class="fa fa-box-open" aria-hidden="true"></i>
                <span class="hide-menu">Produtos</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/test/" aria-expanded="false">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span class="hide-menu">Acessos (em progresso)</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/test/" aria-expanded="false">
                <i class="fa fa-columns" aria-hidden="true"></i>
                <span class="hide-menu">Blank Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/test/" aria-expanded="false">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <span class="hide-menu">Error 404</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    @yield('conteudo')

    <footer class="footer text-center">2021 © Ianz<a></a>
    </footer>
  </div>
  </div>
  <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/app-style-switcher.js')}}"></script>
  <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('js/waves.js')}}"></script>
  <script src="{{asset('js/sidebarmenu.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{asset('js/pages/dashboards/dashboard1.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
        $(".alert").slideUp(500);
      });
    });
  </script>
</body>

</html>