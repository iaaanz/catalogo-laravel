<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/style_home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">IANZ</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" class="">Home</a></li>
        <li><a href="#about" class="page-scroll">Sobre</a></li>
        <li><a href="#services" class="page-scroll">Produtos</a></li>
        <li><a href="#contact" class="page-scroll">Contato</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><strong>IANZ</strong> <span>/</span> Interior Design Studio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Ver mais</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Sobre</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h3>estúdio</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <h3>Como Trabalhamos</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Nossos serviços</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 service"> <img src="img/residential-design.jpg" class="img-responsive" alt="Project Title">
        <h3>Serviço 1</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam. Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend.</p>
      </div>
      <div class="col-xs-12 col-sm-4 service"> <img src="img/office-design.jpg" class="img-responsive" alt="Project Title">
        <h3>Serviço 2</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam. Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend.</p>
      </div>
      <div class="col-xs-12 col-sm-4 service"> <img src="img/commercial-design.jpg" class="img-responsive" alt="Project Title">
        <h3>Serviço 3</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam. Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend.</p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Produtos</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">Todos</a></li>
            <li><a href="#" data-filter=".categoria1">Categoria 1</a></li>
            <li><a href="#" data-filter=".categoria2">Categoria 2</a></li>
            <li><a href="#" data-filter=".categoria3">Categoria 3</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{asset('img/portfolio/01-large.jpg')}}" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Name</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Meet the Team</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
      </div>
      <div id="row">
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="{{asset('img/b.png')}}" alt="..." class="team-img">
            <div class="caption">
              <h3>John Doe</h3>
              <p>Director</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="{{asset('img/i.jpg')}}" alt="..." class="img-circle team-img">
            <div class="caption">
              <h3>Mike Doe</h3>
              <p>Senior Designer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="{{asset('img/f.jpg')}}" alt="..." class="img-circle team-img">
            <div class="caption">
              <h3>Jane Doe</h3>
              <p>Senior Designer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="{{asset('img/d.jpg')}}" alt="..." class="img-circle team-img">
            <div class="caption">
              <h3>Karen Doe</h3>
              <p>Project Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
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
</body>
</html>
