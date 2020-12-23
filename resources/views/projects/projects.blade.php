@extends('layouts.links')
@section('content')
    {{-- <div class="container">
        @if ($projects->count())

                    @foreach ($projects as $project)
                        <div class="row my-2 project">

                                <div class="col-sm-4">
                                    <img src="{{ $project->image }}" alt="project photo" class="card-img-top img-fluid">
                                </div>
                                <div class="col-sm-8 p-2">
                                    <h5 class="card-title">{{ $project->title }}</h5>
                                    <p class="">{!! Str::words($project->content, $limit = 35, $end = '...')   !!}</p>
                                    <p class="card-text"><a href="{{ route('project', $project) }}">pročitaj više</a></p>
                                </div>


                        </div>

                    @endforeach

        @else
            <p>Nemate nijedan projekat!</p>
        @endif
    </div> --}}

    <div class="container  mt-2 ">

        @if ($projects->count())
        <div class="card">
            <div class="card-body">


            @foreach ($projects as $project)

                <div class="row my-2 project">
                    <div class="col-sm-4">
                        <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="post image">
                    </div>
                    <div class="col-sm-8 mt-2 py-3 px-3">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="">{!! Str::words($project->content, $limit = 35, $end = '...')   !!}</p>
                        <p><a href="{{ route('project', $project) }}">pročitaj više</a></p>
                    </div>
                </div>
                <hr>

            @endforeach
            </div>
        </div>
        @else
            <p>Nemate nijedan projekat!</p>
        @endif
    </div>

@endsection

@section('style')

    <style>

        img {
            max-width: 100%;
        }

        .card {
            border:none;
        }

        .project {
            background-color:#efedf2;
            min-height: 150px;
            border-radius: 5px;
        }

        .project p{
            color: rgb(109, 109, 110);
        }

        @media (max-width: 560px) {
            .project {
            font-size: 0.9rem;
        }

        }






    </style>


@endsection

