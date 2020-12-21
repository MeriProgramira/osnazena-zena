@extends('layouts.links')
@section('content')


	<div class="container container-main">
			<div class="row">

			<img class="main-image" src="{{ asset('images/gt_slika2.jpg') }}">
			</div>

			<h1 class="my-5">GirlTHing</h1>
            <p class="main-text">Udruženje mladih žena/djevojaka <span>Girl THing</span>  je organizacija osnovana krajem 2018. godine sa misijom da osnaži djevojke da
               zamisle i ostvare svoje buduće snove u  oblasti informaciono-komunikacijskih tehnologija. <span> Uzimajući u obzir da je svega 30% žena/djevojaka
               zaposleno u IT sektoru </span>i da se većina djevojaka nakon završenog IT fakulteta opredijeli za profesiju asistentice ili profesorice u školi,
               samo od sebe nameće se pitanje, šta uraditi kako bi žene/djevojke ohrabrili da se upuste u veće izazove i krenu u ozbiljnije IT karijere.
               Vođena ovom mišlju, grupa mladih entuzijastica, dolazi na ideju o formiranju grupe djevojaka koja će zajedno raditi na projektima i
               ohrabrivati jedna drugu kroz IT svijet. Tako je nastao "Girl THing" mjesto za djevojke koje zajedno kreiraju i realizuju ideje,
               zajedno rade na novim inovacijama, pišu projekte, uče, prenose znanje i druže se. Nakon uspješno obilježenog Međunarodnog dana
               djevojaka u IKT-u 2019. godine, te  uspjesno realizovanih projekata E-Prisustvo,  Explore new borders i Ko kaže da žene ne
               znaju parkirati , ove mlade dame idu dalje. Predvođene sjajnim <span> dr. sc. Almom Šećerbegović, Lejlom Bašić, Adnom Šaković,
               Nermom Jahić, Alminom Kovačević, Lejlom Šarić </span> i ojacane sa 40-tak aktivnih clanica rade na  realizaciji novih projekata i pozivaju
               mlade,za IT sektor zainteresovane djevojke da im se pridruže. Vise informacija možete pronaći na<a href="http://www.girlthing.ba/"></a></p>
		 <hr>

		<div class="row images-block mb-3">
				<div class="col-lg-4 col-md-4 col-xs-12 mb-3" data-aos="fade-up" >
				    <img src="{{ asset('images/gt_slika1.jpg') }}">
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 mb-3" data-aos="fade-up" data-aos-delay="150">
				    <img src="{{ asset('images/gt_slika3.jpg') }}">
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 mb-3" data-aos="fade-up" data-aos-delay="250">
				    <img src="{{ asset('images/gt_slika4.jpg') }}">
				</div>
        </div>

        <hr>

        {{-- Malala Yousafzai --}}
        <div class="row malala my-5">
            <div class="col-lg-4 col-12">

                    <img src="{{ asset('images/malala.jpg') }}">

            </div>

            <div class="col-lg-8 col-12">
                    <div id="sadrzaj2" class="row information-block">
                        <h1 class="my-2">Malala Yousafzai</h1>
                        <p class="main-text">Ova iznimna Pakistanka, dobitnica brojnih svjetskih nagrada i najmlađa osoba koja je ikada dobila Nobelovu nagradu za mir, u svom je kratkom životu
                             već postigla mnogo. A njena je priča zaista nevjerojatna. S 11 godina Malala je počela pisati dnevnik o životu školarke u pakistanskoj dolini Swat.
                         ‘Možda više nikad neću ići u školu’, rečenica koju je objavila sredinom siječnja 2009. godine, nije rezultat njenog djetinjastog bunta ili odluke
                          da prestane sa školovanjem, već odluke talibana da zatvore sve škole za djevojčice u okrugu Swat. Do tog trenutka već je 150 škola jednostavno bilo
                          razneseno eksplozivom kako bi talibani bili sigurni da se djevojčice neće moći vratiti u školu.
                        I upravo ovdje počinje Malalina borba za pravo ne samo djevojčica, već sve djece svijeta, na obrazovanje i školovanje.
                        </p>
                    </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="main-text mb-5">Unatoč prijetnjama kojima su ona i njena obitelj bile izložene, Malala se nastavila zalagati za obrazovanje djevojčica govoreći o tom gorućem pitanju
                        u brojnim televizijskim intervjuima. Svoju je priču ispričala i u dva dokumentarca koji su ono što se događa u Pakistanu pokazali cijelom svjetu.
                        Njeno zalaganje u javnosti i otvoreno suprotstavljanje talibanskom režimu u kojem žene imaju podčinjenu ulogu, rezultiralo je pokušajem ubojstva dok
                        se autobusom vraćala kući iz škole u listopadu 2012. godine. Ubojica kojeg su angažirali talibani ušao je u autobus i ispalio metak izravno u Malalino lice,
                         pri tome ranivši još dvije djevojčice.‘Često razmišljam o tome i zamišljam tu situaciju. Čak i ako me pokušaju ubiti, reći ću im da je to što čine krivo,
                         da je obrazovanje naše temeljno pravo’, poručila je nakon atentata Malala.No, da je pero jače od mača, odnosno metka u ovom slučaju, pokazala je i Malala
                         koja je preživjela pokušaj ubojstva, napustila Pakistan, nastavila svoju borbu i 2014. dobila Nobelovu nagradu za mir.

                    </p>
                    <hr>
                </div>
            </div>

    </div>

    <div class="row ">
        <div id="razija-title">
            <h1 class="my-2 text-center">Razija Mujanović </h1>
            <h5 class="mb-5 mt-3 text-center text-muted">Najbolja košarkašica i sportistkinja Bosne i Hercegovine svih vremena</h5>
        </div>

        <div class="col-md-12 text-center" data-aos="fade-up" >
            <img src="{{ asset('images/razija.png') }}" alt="">
        </div>
        <div class="col-md-12 my-5" data-aos="fade-up" data-aos-delay="150">
            <p class="main-text">Kada se spomene ženska košarka, većini poznavaoca igre pod obručima sa naših prostora prva asocijacija je legendarna
                Razija “Raza” Mujanović. Raza je punih 27 godina profesionalne karijere harala pod obručima širom svijeta.
                Sa 14 godina je došla iz rodnih Ratkovića u Tuzlu i tada je počela košarkaška bajka. <span> Grad soli i košarkaški klub “Jedinstvo Aida”,
                 Raza je zadužila za sva vremena.</span> Igrala je paralelno za mlađe selekcije i za prvi tim Jednistva, koje je tih godina postalo prvoligaš.
                 Posvećenost, rad i vjera u sebe. Bez te tri stvari nema uspjeha, bez obzira kojim se poslom bavite. Ja sam sanjala košarku, sanjala pobjede
                  i nikad mi nije bila kafa sa drugaricama ispred treninga. Trenirala sam više od drugih. Trening sa ekipom završi, a ja ostanem da treniram
                  individualno, trčim oko dvorane. A trener Miki me naučio da vjerujem u sebe. Na početku sam bila pomalo nesiguran, ali on me ubjedio da mogu
                   biti najbolja na svijetu. Ponavljao mi je to na svakom treningu. Kada sam to prihvatila, došli su rezultati. Razija kaže: "Sada kada vratim film,
                    tek vidim koliko je to veliko i teško dostižno. Dok sam aktivno igrala, sve mi je to bilo normalno, težila sam pobjedama, naporno radila i svi ti
                    uspjesi su mi bili logičan slijed okolnosti. Naravno, jako sam ponosna na svoju karijeru i to što sam 3 puta proglašena za najbolju košarkašicu
                    Starog kontinenta. <span> Posvećenost, rad i vjera u sebe. Bez te tri stvari nema uspjeha, bez obzira kojim se poslom bavite.</span> Ja sam sanjala košarku,
                     sanjala pobjede i nikad mi nije bila kafa sa drugaricama ispred treninga. Trenirala sam više od drugih. Trening sa ekipom završi, a ja ostanem
                     da treniram individualno, trčim oko dvorane. A trener Miki me naučio da vjerujem u sebe. Na početku sam bila pomalo nesiguran, ali on me ubjedio
                     da mogu biti najbolja na svijetu. Ponavljao mi je to na svakom treningu. Kada sam to prihvatila, došli su rezultati. " </p>
        </div>
    </div>


	</div>
@endsection

@section('style')

<style>

    .container-main{
        margin-top:100px;
        height:100%;
        width:100%;
    }
    img{
        max-width: 100%;
    }

    .main-image{
        height:100%;
        width:100%;
    }
    h1{
        text-align:center;
    }

    span {
        font-weight: 600;
    }

    .main-text {
        line-height: 1.9;
    }

    #razija-title {
        width: 100%;
    }

    @media (max-width: 768px) {
        .malala p {
            padding-left: 14px;
            padding-right: 14px;
        }
    }
</style>


{{-- ostavila sam ovako da mozes pitati u Nahli, moze li ovaj tekst.
Cure su dale fotografije na koristenje, tekst je moj, a oslanja se na njihove informacije i tekstove.
Ostalim curama moze koristiti mogucnost da uce dalje sa njima.  --}}

@endsection

