@extends('layouts.links')
@section('content')

    <div class="container  mt-5 ">
            @if($project)
                <div class="container post">
                    <h3 class="text-uppercase pb-3">{{ $project->title }}</h3>
                    <h6 class="px-3 text-black-50">{{ $project->user->user_name }},   <span>{{ $project->created_at->diffForHumans() }}</span></h6>
                    <div class=" pt-2 px-3">
                        <div class="row">
                            <img src="{{ $project->image }}" alt="food image" >
                        </div>

                        <div class="row py-3  ">
                            <p>{!! $project->content !!}</p>
                        </div>
                    </div>

             @else
              <p>Trazeni post ne postoji</p>
             @endif
              </div>
    </div>

@endsection

@section('style')

    <style>
        h6 {
            color: rgb(138, 138, 139);
            font-style: italic;
        }
        .post img {
            max-width: 100%;
            border-radius: 3px;
        }




    </style>


@endsection

