<footer class="site-footer pt-5 bg-dark text-white" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 px-4">
                <h4 class="footer-heading mb-4 ">O nama</h4>
                <p>Portal "Osnažena žena" je nastao u Tuzli, od strane <a href="{{route('us')}}">GorgeousITGirls</a> polaznica obuke „&ltA&gt &ltDA&gt ona programira?“ kao naš završni rad.
                    Projekat <span class="gorgeous">„&ltA&gt &ltDA&gt ona programira?“</span> je pružio besplatnu obuku iz web programiranja za 15 žena iz Tuzle, a organizovan je od
                    strane Edukacijskog centra ”Nahla” Tuzla, uz podršku Grada Tuzla 2020.
                </p>
            </div>
            <div class="col-md-4 px-4 text-center">
                <h4 class="footer-heading mb-4 ">Linkovi</h4>
                <ul class="list-unstyled">
                    <li class="py-2"><a href="{{ route('home') }}">Početna </a></li>
                    <li class="py-2"><a href="{{ route('projects') }}">Projekti</a></li>
                    <li class="py-2"><a href="{{ route('inspire') }}">Inspiracija</a></li>
                    <li class="py-2"><a href="{{ route('posts') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3 px-4 ">
                {{-- <h4 class="footer-heading mb-4 ">Pratite nas</h4>
                <a href="#" class="pl-0 pr-3 "><span class="icon-facebook "></span></a>
                <a href="#" class="pl-3 pr-3 "><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3 "><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3 "><span class="icon-linkedin"></span></a> --}}
                <h4 class="footer-heading mb-4 ">Javite se</h4>
                <p class="mb-2"> <span class="mr-3"><strong class="text-white">Tel:</strong> <a href="tel://#">+387 61
                            611138</a></span>
                </p>
                <p> <span><strong class="text-white">Email:</strong> <a href="#">info@osnazenazena.com</a></span></p>
            </div>
        </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
            <div class="border-top pt-5 text-muted">
                <p id="copyrights">
                    Copyright &copy 2020 All rights reserved | Made <i class="icon-heart " aria-hidden="true"></i>
                    by <a href="{{route('us')}}">GorgeousITGirls</a>
                </p>
            </div>
        </div>

    </div>

</footer>
