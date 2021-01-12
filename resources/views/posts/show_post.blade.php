@extends('layouts.links')
@section('content')

    <div class="container  mt-5 ">
            @if($post)
                <div class="container post">
                    <h3 class="text-uppercase pb-3">{{ $post->title }}</h3>
                    <h6 class="px-3 text-black-50">{{ $post->user->user_name }},   <span>{{ $post->created_at->diffForHumans() }}</span></h6>
                    <div class=" pt-2 px-3">
                        <div class="row">
                            <img src="{{ $post->image }}" alt="food image" >
                        </div>

                        <div class="row py-3 post-content ">
                            <p>{!! $post->content !!}</p>
                        </div>
                    </div>
                    <div class="   ">
                        <p>Komentari ({{ $post->comments()->count() }})</p>

                        <div class="container">
                            @foreach ($post->comments as $comment)

                                <div class="my-2 px-3 py-1 comment">
                                    <p> <b> {{ $comment->user->name }}, {{ $comment->created_at->diffForHumans() }} </b></p>
                                    <hr>
                                    <p class="pl-3">{{ $comment->content }}</p>
                                </div>

                                @if ( auth()->user() && auth()->user()->role == "admin")

                                    <form method="POST" action="{{ route('update-comment', $comment) }}" class="border my-2 p-2">
                                        @csrf
                                        {{-- @method('PUT') --}}
                                        <p>Forma za izmjenu komentara</p>
                                        <div class="form-group ">
                                            <input type="text" name="content" class="form-control" value="{{ $comment->content }}"/>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-warning" value="Izmjeni komentar" />
                                        </div>
                                    </form>

                                    <form action="{{ route('delete-comment', $comment) }}" method="POST" class="mb-2">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-warning" value="Obriši komentar" />
                                    </form>

                                @endif

                            @endforeach
                        </div>


                        @if (auth()->user())
                            <form method="post" action="{{ route('create-comment') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="content" class="form-control" />
                                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Dodaj komentar" />
                                </div>
                            </form>
                        @else
                            <p>Da biste mogli pisati komentare molimo da se <a href="{{ route('login') }}">prijavite</a>  ili <a href="{{ route('register') }}">registrujete</a> ... </p>
                        @endif

                    </div>
                </div>
                <hr>
             @else
              <p>Trazeni post ne postoji</p>
             @endif
    </div>


@endsection

@section('style')

    <style>
        h6 {
            color: rgb(138, 138, 139);
            font-style: italic;
        }

        img {
            max-width: 100%;
        }

        .comment {
            font-size: 0.9rem;
            border: 0.7px solid rgb(201, 200, 207);
            border-radius: 7px;
        }

        .post-content p{
            width: 100%;
        }

        .post-content img{
            text-align: center;
            max-width: 100%;
        }


    </style>


@endsection

