@extends('layouts.links')
@section('content')

    <div class="container  mt-5 ">

        @if ($posts->count())
        <div class="row ">

            @foreach ($posts as $post)
                @if($loop->first)


                    <div class="col-sm-12">
                  <div class="card bg-dark text-white ">
                    <img src="{{ $post->image }}" class="card-img" id="main-img" alt="post image">
                    <div class="card-img-overlay ">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <h6 class="px-3 ">{{ $post->user->user_name }},   <span>{{ $post->created_at->diffForHumans() }}</span></h6>
                      <p class="card-text">{!! Str::words($post->content, $limit = 23, $end = '...')   !!}</p>
                      <p class="card-text"><a href="{{ route('blog', $post) }}">pročitaj više</a></p>
                    </div>
                  </div>
                </div>


                @else

                    <div class="col-sm-3">
                        <div class="card my-5 second-blog" >
                            <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="post image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{!! Str::words($post->content, $limit = 23, $end = '...')   !!}</p>
                                <p class="card-text"><a href="{{ route('blog', $post) }}">pročitaj više</a></p>
                            </div>
                        </div>
                    </div>

                @endif


            @endforeach
        </div>
        @else
            <p>Nemate nijedan post!</p>
        @endif
    </div>


@endsection

@section('style')

    <style>
        h6 {
            color: rgb(219, 219, 224);
            font-style: italic;
        }
        img {
            max-width: 100%;
        }

        #main-img {
            opacity: 0.35;
        }

        .card-img-overlay {
            padding: 5% 7%;
        }

        .card {
            border:1px solid rgb(190, 189, 194) ;
        }

        .second-blog {
            font-size: 0.7rem;
        }

        @media (max-width: 560px) {
            .card {
                font-size: 0.8rem;
            }
        }






    </style>


@endsection

