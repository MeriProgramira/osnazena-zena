@extends('layouts.links')
@section('content')

    <div class="container  mt-2 ">

        @if ($news->count())
        <div class="row">


            @foreach ($news as $new)
            @if($loop->first)

                <div class="col-lg-12" data-aos="fade-up">
                    <div class="overlay mb-2">
                        <img src="{{ $new->image }}" class="card-img-top img-fluid main-img" alt="post image">
                    </div>
                    <div class="text-news">
                        <p class="card-category-second">{{ $new->category }}</p>
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{!! Str::words($new->content, $limit = 35, $end = '...')   !!}<a href="{{ route('new', $new) }}">pročitaj više</a></p>
                    </div>
                </div>
            @else

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="item mb-2">
                        <div class="overlay">
                            <img src="{{ $new->image }}" class="card-img-top img-fluid" alt="post image">
                        </div>
                        <div class="text-news-second px-2">
                            <p class="card-category-second">{{ $new->category }}</p>
                            <h5 class="card-title">{{ $new->title }}</h5>
                            <p class="card-text">{!! Str::words($new->content, $limit = 15, $end = '...')   !!}<a href="{{ route('new', $new) }}">pročitaj više</a></p>
                        </div>

                    </div>
                </div>

            @endif

            @endforeach

        </div>
        @else
            <p>Nemate nijednu vijest!</p>
        @endif
    </div>


@endsection

@section('style')

    <style>
        h6 {
            color: rgb(219, 219, 224);
            font-style: italic;
        }

        .overlay {
            position: relative;
            background-color: black;
            border-radius: 3px;
        }

        .text-news {
            position: absolute;
            top: 20%;
            left: 10%;
            color:rgb(245, 242, 248);
        }

        .text-news-second {
            position: absolute;
            top: 5%;
            left: 5%;
            font-size: 14px;
            color:rgb(245, 242, 248);
        }

        .card-category-second {
            color: rgb(241, 59, 187);
            font-weight: 600;
        }

        img {
            max-width: 100%;
            opacity: 0.55;
        }

        .item {
            border-radius: 3px;
        }

        .project {
            background-color:#efedf2;
        }



        @media (max-width: 560px) {
            .text-news {
            position: absolute;
            top: 5%;
            left: 5%;
            font-size: 14px;
        }

        }






    </style>


@endsection
