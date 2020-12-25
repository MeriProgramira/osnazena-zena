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
        <h5 class="my-5"><b> Dešava se svima da izgube smjer,energiju, prepuste se osjećaju sumnje u sebe i odustanu.
            Ovdje su neki inspirativni citati za žene koji će vas osnažiti, a izrekle su ih neke od najjačih žena u povijesti.</b></h5>

       <div class="card my-2">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Volim vidjeti mladu djevojku kako izlazi i svijet grabi za revere. Život je težak. Moraš izaći i pobijediti ga.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Maya Angelou</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body">
          <blockquote class="blockquote mb-0" >
            <p>“Kada dajemo od sebe najbolje što možemo, nikad ne znamo kakvo čudo se može pojaviti u našem životu ili u životu drugoga.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Helen Keller</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Vjerujem da svatko od nas ima osobni poziv koji je jedinstven kao otisak prsta – i da je najbolji način na koji možete otkriti što volite,
                a zatim pronaći način da to ponudite drugima – služenje, naporan  rad i također omogućavanje energiji svemira  da vas vodi.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Oprah Winfrey</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="300">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Jedna od najhrabrijih stvari koje možete učiniti je prepoznati sebe, znati tko ste, u što vjerujete i gdje želite ići.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Sheila Murray Bethel</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="400">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Što god žene radile, one to moraju odraditi duplo bolje od muškaraca kako bi se mislilo da su upola dobre kao oni.  Srećom, to nije teško.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Charlotte Whitton</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="500">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Moramo vjerovati da smo nadareni za nešto – i tu stvar, bez obzira na cijenu, moramo postići.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Marie Curie</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="600">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Žena je puni krug. Unutar nje je moć stvaranja, njege i transformacije.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Diane Mariechild</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="700">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Jaka žena shvaća da su darovi poput logike, odlučnosti i snage jednako ženstveno kao i intuicija i emocionalne veze.
                Ona vrednuje i koristi sve svoje darove.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Nancy Rathburn</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="800">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Žena je puni krug. Unutar nje je moć stvaranja, njege i transformacije.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Diane Mariechild</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="900">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Jedna od lekcija s kojom sam odrasla, bila je da uvijek ostanem vjerna sebi i da nikad ne dopustim
              da me ono što netko drugi kaže odvrati od mojih ciljeva.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Michelle Obama</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1000">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Nadam se da će očevi i majke mladih djevojaka gledati ih u oči i reći im “Da, žene to mogu. “."</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Dilma Rousseff</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1100">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Ženom se ne rađa, ženom se postaje.“</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Simone de Beauvoir</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1200">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Možda ćete doživjeti mnoge poraze, ali ne morate biti poraženi. U stvari, možda će biti potrebno da
               doživite poraze, tako da možete znati tko ste, iz čega se možete uzdignuti  i da se još uvijek možete uzdignuti.”</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Maya Angelou</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1300">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Hrabrost je poput mišića. Korištenjem je jačamo. “</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Ruth Gordon</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1400">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>“Kada svoj život uzmete u svoje ruke – što se događa? Strašna stvar, ne možete nikoga kriviti za ništa. “</p>
            <footer class="blockquote-footer"> <cite title="Source Title">Erica Jong</cite></footer>
          </blockquote>
        </div>
      </div>

      <div class="card my-2" data-aos="fade-up" data-aos-delay="1500">
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
