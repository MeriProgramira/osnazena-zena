@extends('layouts.links')
@section('content')

    <div class="container  mt-5 ">

        @if ($posts->count())
        <div class="row ">

            @foreach ($posts as $post)
                @if($loop->first)


                    <div class="col-sm-12">
                  <div class="card bg-dark text-white mb-3 " style="min-height: 320px">
                    <img src="{{ $post->image }}" class="card-img" id="main-img" alt="post image">
                    <div class="card-img-overlay ">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <h6 class="px-3 ">{{ $post->user->user_name }},   <span>{{ $post->created_at->diffForHumans() }}</span></h6>
                      <p class="card-text">{!! Str::words($post->content, $limit = 23, $end = '...')   !!}</p>
                      <p class="card-text"><a href="{{ route('blog', $post) }}" class="read-more">pročitaj više</a></p>
                    </div>
                  </div>
                </div>


                @else

                    <div class="col-lg-6 second-blog ">
                        <div class="row " style="min-height: 300px">
                            <div class="col-lg-5">
                                <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="post image">
                            </div>
                            <div class="col-lg 7">
                                <h6 class="card-title" id="second-title">{{ $post->title }}</h6>
                                <p class="card-text ">{!! Str::words($post->content, $limit = 17, $end = '...')   !!} <a href="{{ route('blog', $post) }}" class="read-more">pročitaj više</a></p>
                            </div>
                            <hr>
                        </div>
                    </div>

                        {{-- <div class="card second-blog "  style="width: 16rem;" >
                            <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="post image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{!! Str::words($post->content, $limit = 23, $end = '...')   !!}</p>
                                <p class="card-text"><a href="{{ route('blog', $post) }}">pročitaj više</a></p>
                            </div>
                        </div> --}}


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
            font-size: 0.8rem;
            margin: 14px 0;
        }

        .second-blog p{
            color: grey;
            font-size: 16px;
        }

        .read-more {
            font-size: 14px;
            margin-top: 7px;
        }

        @media (max-width: 560px) {
            .card{
                font-size: 0.8rem;
            }

            #second-title {
                padding-top: 10px;
            }
        }






    </style>


@endsection

