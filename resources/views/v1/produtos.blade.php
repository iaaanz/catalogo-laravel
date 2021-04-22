@extends('layout')

@section('conteudo')
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
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
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
        <div class="col-sm-6 col-md-4 col-lg-4 categoria2">
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
@endsection