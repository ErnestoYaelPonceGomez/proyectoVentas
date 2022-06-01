@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Ha iniciado sesión con éxito!') }}</div>
    </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/laptop-gamer.png" class="d-block w-100 px-5" alt="..." style="width: 500px; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laptops gamer</h5>
        <p>Encuentra tu laptop gamer que más se ajuste a tus necesidades</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/teclado-mouse.jpeg" class="d-block w-100 px-5" alt="..." style="width: 500px; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Teclados y mouses</h5>
        <p>Encuentra los mejores teclados y mouses para jugar por muchas horas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/monitor.jpg" class="d-block w-100 px-5" alt="..." style="width: 500px; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Monitores</h5>
        <p>Monitores de calidad para que disfrutes de una alta definición y tasa de regresco potentes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/compu-escritorio.png" class="d-block w-100 px-5" alt="..." style="width: 500px; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arma tu set up</h5>
        <p>Te armamos tu set up a tu estilo</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection
