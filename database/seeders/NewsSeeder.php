<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'Poziv na dvodnevnu online radionicu o volontiranju' ,
                'category' => 'volontiranje' ,
                'active' => true ,
                'content' => 'Drage volonterke i volonteri,

                pozivamo vas na dvodnevnu online radionicu o volontiranju kao alatu za izgradnju inkluzivnog društva. Ako si volonter/ka ili to tek planiraš postati,
                 pridruži nam se na ovoj radionici i (p)ostani aktivan član zajednice. Naši će edukatori s vama podijeliti svoja znanja i iskustva te u interaktivnom okruženju skupa s vama promišljati o:

                • dobrobitima i vrijednostima volontiranja

                • ulozi volontera u zalaganju za ljudska prava

                • borbi protiv stereotipa i predrasuda

                • zakonskom okruženju volonterstva u Republici Hrvatskoj

                • značaju verbalne i neverbalne komunikacije

                • problemima i potrebama migranata i izbjeglica

                • radu na izgradnji interkulturalnog društva koje uvažava raznolikosti i u kojem svatko može pronaći svoje mjesto.

                Edukacija će se odvijati u dva dana,  17. i 18. prosinca, od 10 do 12 sati putem Zoom aplikacije.' ,
                'image' => '/uploads/news1.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],

            [
                'title' => 'Pokrenuta prva bh. platforma za freelancere' ,
                'category' => 'zaposlenje' ,
                'active' => true ,
                'content' => 'Cilj platforme Beecreative je dati mladim ljudima novu perspektivu o zapošljavanju te im pružiti mogućnost da dođu
                do svojih prvih klijenata kako bi ostvarili svoje prve poslovne angažmane, a iskusnijim freelancerima omogućiti rad na ozbiljnijim
                angažmanima. Platforma trenutno obuhvata kategorije kreativne industrije, kao što su fotografija, grafički dizajn, web dizajn i
                digitalni marketing, a plan je da se u narednih šest mjeseci razvija u smjeru IT industrije i administrativnih poslova. Nahlin tim
                koji radi na platformi Beecreative aktivno prati situaciju na tržištu rada, pa će se platforma dograđivati na način da adekvatno odgovori zahtjevima tržišta.' ,
                'image' => '/uploads/news2.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],

            [
                'title' => 'Učite besplatno online uz mentoring Nahlinih predavača/ica!' ,
                'category' => 'edukacija' ,
                'active' => true ,
                'content' => 'Najznačajnija prednost učenja putem dostupnog online sadržaja je nepostojanje geografskih barijera i dostupnost kvalitetnog video
                 i pisanog materijala globalno. Međutim, činjenica da danas imamo brojne dostupne sadržaje često zna obeshrabriti internet korisnike da se odvaže
                  na ovaj način učenja zbog nemogućnosti kvalitetne selekcije, nedostatka strukture u savladavanju gradiva i, najbitnije, nepostojanja mentorske podrške.
                   Korisnik koji je u mogućnosti samostalno učiti online i primjenjivati naučeno, ne smatra se za totalnog početnika. Stoga, svima vama koji do sada niste
                    učili online preporučujemo mentorstvo u početnoj fazi učenja zbog određivanja toka učenja, usmjeravanja i pomoći kod prevazilaženja izazova koji se javljaju
                     u praktičnoj primjeni naučenog. ' ,
                'image' => '/uploads/news3.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],

            [
                'title' => 'Besplatna psihološka pomoć i podrška putem telefona' ,
                'category' => 'besplatna psihološka pomoć' ,
                'active' => true ,
                'content' => 'U cilju ublažavanja teškoća nastalih pojavom koronavirusa i u skladu s preporukama o reduciranju kretanja i izlazaka iz svojih domova,
                 omogućili smo besplatnu psihološku pomoć i podršku našim sugrađanima i sugrađankama putem telefona. Na raspolaganju su naše psihologinje u Sarajevu i Bihaću. ' ,
                'image' => '/uploads/news4.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],


        ];

        News::insert($news);
    }
}
