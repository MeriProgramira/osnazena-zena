<div class="border-bottom top-bar py-2 bg-dark" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="mb-0">
                    <span class="mr-3"><strong class="text-white">Tel:</strong> <a href="tel://#">+387 35
                            123456</a></span>
                    <span><strong class="text-white">Email:</strong> <a href="#">info@osnazenazena.com</a></span>
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <ul class="social-media">
                    <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                    <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
                    @guest
                                @if (Route::has('login'))
                                    <li class="">
                                        <a class="p-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="">
                                        <a class="p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form></li>
                                      <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    </ul>
                                  </li>

                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light border-bottom " id="main-nav">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo21.png" alt="logo" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="#">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#about-us">O nama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('news') }}">Novosti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('projects') }}">Projekti</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Inspiracija
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('inspire') }}">One nas inspirišu</a></li>
                        <li><a class="dropdown-item" href="{{ route('quotes') }}">Citati </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('useful-links') }}">Korisni linkovi i dokumenti</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('posts') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact">Kontakt</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
