@extends('layout')

@section('conteudo')
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><strong>IANZ</strong> <span>/</span> Interior Design Studio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Ver mais</a>
          </div>
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
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="nav flex-column type">
                <li><a href="#" data-filter="*" class="active">Todos</a></li>
                <li><a href="#" data-filter=".categoria1">Categoria 1</a></li>
                <li><a href="#" data-filter=".categoria2">Categoria 2</a></li>
                <li><a href="#" data-filter=".categoria3">Categoria 3</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel1.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel2.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel3.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel1.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel2.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel3.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel1.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel2.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 categoria1">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Project Name</h4>
                </div>
                <img src="{{asset('img/movel3.jpg')}}" class="img-responsive" alt="Project Title">
              </a> </div>
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
@endsection