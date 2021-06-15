<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title></title>
  <link rel="stylesheet" href="{{asset('css/bootstrap_admin.css')}}">
  <link rel="stylesheet" href="{{asset('css/style_dashboard.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<style>
  #overlay {
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
  }

  *:focus {
    outline: 0 !important;
  }

  .close {
    color: rgb(173, 173, 173);
    text-decoration: none !important;
  }

  .close:hover {
      color:rgb(94, 93, 93); 
      text-decoration:none; 
      cursor:pointer;  
  }
</style>

<body>
  <div class="app">
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
            <a class="navbar-brand" href="/v1/test/dashboard">
              {{-- <b class="logo-icon">
                <img src="{{asset('plugins/images/logo-icon.png')}}" alt="homepage" />
              </b> --}}
              <span class="logo-text">
                <img src="{{asset('plugins/images/logo-text.png')}}" alt="homepage" />
              </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              {{-- <li class=" in">
                <form role="search" class="app-search d-none d-md-block me-3">
                  <input type="text" placeholder="Search..." class="form-control mt-0">
                  <a href="" class="active">
                    <i class="fa fa-search"></i>
                  </a>
                </form>
              </li> --}}
              <li>
                <div class="dropdown show">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="text-white h4">{{ Auth::user()->name }}</span>
                    <i class="fas fa-chevron-down me-2"></i>
                  </a>
                  
                  <div class="dropdown-menu" style="left: -100px !important" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
                </div>
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
              {{-- <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.conta')}}" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Conta</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.categories.index') }}" aria-expanded="false">
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
              {{-- <li class="sidebar-item">
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
              </li> --}}
            </ul>
          </nav>
        </div>
      </aside>

      @yield('conteudo')

      <footer class="footer text-center">2021 © Ianz<a></a>
      </footer>
    </div>
  </div>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="{{asset('js/app.js')}}" defer></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/sidebarmenu.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".alert").fadeTo(3000, 500).slideUp(500, function() {
        $(".alert").slideUp(500);
      });
    });
  </script>
</body>

</html>