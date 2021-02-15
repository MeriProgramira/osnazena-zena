<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/favicon.ico') }}"/>

    <title>Osnazena zena | Login | Register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/mypjlpl0ll198jkom1nivwr7g17mj8g5oefvob9eqey6bvy5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo21.png') }}" alt="Osnazena zena" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('style')

    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: [ "advlist autolink lists link image charmap print preview anchor insert", "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste hr" ],
        toolbar: "insertfile undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | blockquote hr | bullist numlist outdent indent | link image",
        images_upload_url: 'postAcceptor.php',
        automatic_uploads: false

        });
    </script>


{{-- <script>

    tinymce.init({

        selector: "textarea",

        file_picker_callback: function (cb, value, meta) {

        var input = document.createElement('input');

        input.setAttribute('type', 'file');

        input.setAttribute('accept', 'image/*');



        /*

        Note: In modern browsers input[type="file"] is functional without

        even adding it to the DOM, but that might not be the case in some older

        or quirky browsers like IE, so you might want to add it to the DOM

        just in case, and visually hide it. And do not forget do remove it

        once you do not need it anymore.

        */



        input.onchange = function () {

        var file = this.files[0];



        var reader = new FileReader();

        reader.onload = function () {

        /*

        Note: Now we need to register the blob in TinyMCEs image blob

        registry. In the next release this part hopefully won't be

        necessary, as we are looking to handle it internally.

        */

        var id = 'blobid' + (new Date()).getTime();

        var blobCache = tinymce.activeEditor.editorUpload.blobCache;

        var base64 = reader.result.split(',')[1];

        var blobInfo = blobCache.create(id, file, base64);

        blobCache.add(blobInfo);



        /* call the callback and populate the Title field with the file name */

        cb(blobInfo.blobUri(), { title: file.name });

        };

        reader.readAsDataURL(file);

        };



        input.click();

        },

       plugins: [

  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',

  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',

  'table emoticons template paste help'

],            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',

        save_onsavecallback: function () {

                var content = tinymce.activeEditor.getContent();

            },

            setup: function(ed) {

                ed.on('keyup', function(e) {

                    console.log('Editor contents was modified. Contents: ' + ed.getContent());

                });

            }

        });

</script> --}}


</body>
</html>
