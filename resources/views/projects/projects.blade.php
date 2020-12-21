@extends('layouts.links')
@section('content')

    <div class="container  mt-2 ">

        @if ($projects->count())
        <div class="card">
            <div class="card-body">


            @foreach ($projects as $project)

                <div class="row my-2 project">
                    <div class="col-sm-4">
                        <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="post image">
                    </div>
                    <div class="col-sm-8 mt-2 py-1 px-2">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{!! Str::words($project->content, $limit = 35, $end = '...')   !!}</p>
                        <p class="card-text"><a href="{{ route('project', $project) }}">pročitaj više</a></p>
                    </div>
                </div>
                <hr>

            @endforeach
            </div>
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

        .card {
            border:none
        }

        .project {
            background-color:#efedf2;
        }



        @media (max-width: 560px) {

        }






    </style>


@endsection

