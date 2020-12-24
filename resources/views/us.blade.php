@extends('layouts.links')
@section('content')
{{-- <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> --}}
    <div class="container">
    <div class="container my-3">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src={{asset("images/itgirls.png")}} class="d-block w-100 rounded" alt="...">
          </div>
          </div>
          </div>
          </div>

<div class="container text-center" data-aos="fade-up" >
  <div class="card my-2">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <img src={{asset("images/meri.png")}}>
        <p>“Koje divno iskustvo. Naučila mnogo i upoznala gorgeous cure.”</p>
        <footer class="blockquote-footer"> <cite title="Source Title">Mersiha Mišković</cite></footer>
      </blockquote>
    </div>
  </div>

  <div class="card my-2" data-aos="fade-up" data-aos-delay="100">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
      <img src={{asset("images/indira.png")}}>
        <p>“Vjeruj i čini dobro.“</p>
        <footer class="blockquote-footer"> <cite title="Source Title">Indira Nuhanović</cite></footer>
      </blockquote>
    </div>
  </div>

  <div class="card my-2" data-aos="fade-up" data-aos-delay="200">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
      <img src={{asset("images/atalija1.jpg")}}>
        <p>“Svaki početak je težak, ali mi odlučujemo kakav će kraj biti. Ono što je bitno je pravi motiv i ljubav prema onome što radimo, te onda svaki naš san možemo pretvoriti u stvarnost. Velika čast mi je biti dio ovog projekta i najdražeg tima. Sretna sam zbog divne prilike.“</p>
        <footer class="blockquote-footer"> <cite title="Source Title">Atalija Smajić</cite></footer>
      </blockquote>
    </div>
  </div>

  <div class="card my-2" data-aos="fade-up" data-aos-delay="300">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
      <img src={{asset("images/almedina1.jpg")}}>
        <p>“Projekat "Osnažena žena" me naučio da svoje snove pretvorim u stvarnost. Učinite to sa strašću, ili uopće nemojte pokušavati. ”</p>
        <footer class="blockquote-footer"> <cite title="Source Title">Almedina Brašnjić</cite></footer>
      </blockquote>
    </div>
  </div>






</div>

    </div>

{{-- </body> --}}

<script>
$('.carousel').carousel({
interval: 3000
});
</script>
@endsection
