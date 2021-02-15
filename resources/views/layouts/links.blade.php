<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Obrazovanje je jedno od najvažnijih sredstava za osnaživanje žena, a IT sektor pruža velike mogućnosti ">
    <meta name="keywords" content="osnažena žena, žene u IT, rodna ravnopravnost">
    <meta name="author" content="GorgeousITGirls">

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/favicon.ico') }}"/>
    <title>Osnažena žena | Novosti | Projekti | Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <!-- Bootstrap and other CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css?v=').time()}}">
</head>

<body>
   {{--  <div id="particles-js">

    </div> --}}

    @include('./partials/links_nav')

    @yield('content')

    @include('./partials/footer')

    @yield('style')

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('js/aos.js') }} "></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }} "></script>
    <script src="{{ asset('js/jquery.sticky.js') }} "></script>
    <script src="js/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{ asset('js/main.js') }} "></script>

</body>

</html>
