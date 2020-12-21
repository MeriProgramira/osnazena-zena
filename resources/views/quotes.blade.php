@extends('layouts.links')
@section('content')

    <div class="container my-3">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/quote1.png') }}" class="d-block w-100 rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/quote2.png') }}" class="d-block w-100 rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/quote3.png') }}" class="d-block w-100 rounded" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>

    <div class="container text-center" data-aos="fade-up" >
      <div class="card my-2">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Jedna od lekcija s kojom sam odrasla, bila je da uvijek ostanem vjerna sebi i da nikad ne dopustim
              da me ono što netko drugi kaže odvrati od mojih ciljeva.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Michelle Obama</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Nadam se da će očevi i majke mladih djevojaka gledati ih u oči i reći im “Da, žene to mogu. “."</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Dilma Rousseff</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Ženom se ne rađa, ženom se postaje.“</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Simone de Beauvoir</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="300">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Možda ćete doživjeti mnoge poraze, ali ne morate biti poraženi. U stvari, možda će biti potrebno da
               doživite poraze, tako da možete znati tko ste, iz čega se možete uzdignuti  i da se još uvijek možete uzdignuti.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Maya Angelou</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="400">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Hrabrost je poput mišića. Korištenjem je jačamo. “</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Ruth Gordon</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="500">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Kada svoj život uzmete u svoje ruke – što se događa? Strašna stvar, ne možete nikoga kriviti za ništa. “</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Erica Jong</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="600">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Ako vam se ne sviđa biti otirač, onda se dignite s poda.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Al Anon</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>


@endsection


@section('style')

@endsection

<script>
    $('.carousel').carousel({
  interval: 3000
})
</script>
