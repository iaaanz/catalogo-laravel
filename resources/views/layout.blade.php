<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style_home.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/nivo-lightbox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/default.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">IANZ</a> 
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('home')}}" class="">Home</a></li>
          <li><a href="{{route('home')}}#about" class="page-scroll">Sobre</a></li>
          <li><a href="{{route('produtos')}}" class="page-scroll">Produtos</a></li>
          <li><a href="#contact" class="page-scroll">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('conteudo')

  <div id="contact">
    <div class="container">
      <div class="section-title text-center">
        <h2>Contact Us</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <div class="contact-item"> <span>Address</span>
          <p>4321 California St,<br>
            San Francisco, CA 12345</p>
        </div>
        <div class="contact-item"> <span>Email</span>
          <p>info@company.com</p>
        </div>
        <div class="contact-item"> <span>Phone</span>
          <p> +1 123 456 1234</p>
        </div>
      </div>
      <div class="col-md-8">
        <h3>Leave us a message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container text-center">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
      <div>
        <p>&copy; <a href="" rel="nofollow"></a></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/nivo-lightbox.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jqBootstrapValidation.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/contact_me.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  <script>
    $(document).ready(function() {
      if ($("#header").length == 0) {
        $(".navbar-default").addClass("on");
      }
    });
  </script>
</body>

</html>