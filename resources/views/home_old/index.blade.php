@extends('layout')

@section('banner')
<div id="banner" class="first-container shadow">
  <div class="mask">
    <div class="container d-flex align-items-center justify-content-center text-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Loja fictícia</h1>
        <h5 class="mb-4">Descrição breve sobre a loja</h5>
      </div>
    </div>
  </div>
</div>
@endsection
@section('conteudo')
{{-- <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="{{asset('img/movel1.jpg')}}">
      <div class="card-body">
        <h5 class="card-title">Produto 1</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
  </div>
    <div class="card">
      <img class="card-img-top" src="{{asset('img/movel2.jpg')}}">
      <div class="card-body">
        <h5 class="card-title">Produto 2</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
  </div>
    <div class="card">
      <img class="card-img-top" src="{{asset('img/movel3.jpg')}}">
      <div class="card-body">
        <h5 class="card-title">Produto 3</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
</div> --}}
<div class="owl-carousel owl-theme">
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel1.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel1.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel2.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel3.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel1.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel2.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel3.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel1.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
  <div class="item">
    <a href="#">
      <img src="{{asset('img/movel2.jpg')}}">
      <div class="overlay"></div>
    </a>
  </div>
</div>
{{-- <div class="wrapper">
  <div class="init_cards"><img src="{{asset('img/movel1.jpg')}}" />
      <div class="info">
          <h1>Produto 1</h1>
          <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p><button>Ver mais</button>
      </div>
  </div>
  <div class="init_cards"><img src="{{asset('img/movel2.jpg')}}" />
      <div class="info">
          <h1>Produto 2</h1>
          <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p><button>Ver mais</button>
      </div>
  </div>
  <div class="init_cards"><img src="{{asset('img/movel3.jpg')}}" />
      <div class="info">
          <h1>Produto 3</h1>
          <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p><button>Ver mais</button>
      </div>
  </div>
</div> --}}
@endsection