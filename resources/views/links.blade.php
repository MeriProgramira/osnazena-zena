@extends('layouts.links')
@section('content')

	<div class="container mt-5">

		<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12" id="slika">

						<img src="https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjA0fHxpbmZvcm1hdGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">

				</div>
			<div class="col-lg-6 col-md-6 col-sm-12"id="sadrzaj">

					<hr>
					Informacije  su vrijedan resurs. Pažljivo birajte svoje izvore. Kvalitetna informacija je lako dostupna, redovito ažurirana i tačna.
					Ona može omogućiti promjenu percepcije, svijesti, imati  uticaj na ponašanje i odluku primatelja informacije.Jednak izazov je  pronaći odgovarajuće
					informacije, kao i  iskoristiti ih  na inteligentan način. Odlučujuća je prava informacija u pravo vrijeme na pravom mjestu.
					U nastavku donosimo linkove koji vam mogu biti od koristi.
					<hr>

			</div>
        </div>
        {{-- //ideja je da ovo dvoje  gornjih bude jedno pored drugog,linkovi ispod
        //dodala sam njihove partnere, jer su vjerovatno prihvatljivi --}}
            <h3 class="my-4">Korisni linkovi</h3>
            <div class="row my-2" id="linkovi">
                <div class="col-md-4 col-sm-12">
                    <ul><a href="https://grad.tuzla.ba// " target="_blank"> Grad Tuzla</a></ul>
                    <ul><a href="https://tuzla.nahla.ba/ " target="_blank"> Nahla Tuzla</a></ul>
                    <ul><a href="https://nahla.ba/ " target="_blank"> Nahla Sarajevo</a></ul>
                    <ul><a href="https://bihac.nahla.ba/ " target="_blank"> Nahla Bihać</a></ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul><a href="https://humanappeal.org.uk/ " target="_blank"> Human Appeal</a></ul>
                    <ul><a href="http://www.muslimaidbih.org/ " target="_blank"> Muslim Aid</a></ul>
                    <ul><a href=" http://www.eiz.hr/" target="_blank"> Ekumenska incijativa zena</a></ul>
                    <ul><a href="https://mladi.org/v2/bs/ " target="_blank"> Kult za razvoj mladih Tuzla</a></ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul><a href="http://www.mhrr.gov.ba/default.aspx?langTag=bs-BA&template_id=127&pageIndex=1 " target="_blank"> Ministarstvo za ljudska prava i izbjeglice</a></ul>
                    <ul><a href="https://www.unwomen.org/ " target="_blank"> UN women</a></ul>
                    <ul><a href="https://www.empowerwomen.org/ " target="_blank"> Empowerwomen</a></ul>
                    <ul><a href="https://www.weps.org/ " target="_blank"> The Women’s Empowerment Principles (WEPs)</a></ul>
                </div>
            </div>

    </div>

@endsection

@section('style')

<style>
	#linkovi{
	text-align:center;
    }

	.sadrzaj{
	text:left;
	}

    img {
        max-width: 100%;
    }

	</style>

@endsection


