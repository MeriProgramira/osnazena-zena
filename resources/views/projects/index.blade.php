
@extends('layouts.app')
@section('content')

    <div class="container  mt-5 ">

    @if (auth()->user())
    <p><a class=" m-3" href="{{ route('dashboard') }}"> <b>Povratak na Dashboard</b> </a></p>

        <h3 class="text-uppercase">Svi projekti  ({{ $projects->count() }}) </h3>
        @if ($projects->count())
        <table class="table mt-3">
            @foreach ($projects as $project)

                @if (auth()->user()->id === $project->user_id || auth()->user()->role === 'admin')
                <tr>
                    <th colspan="3"
                        style="background-image: linear-gradient(to top, #f7b3d8 0%, #f8e1f3 100%);">{{ $project->user->user_name }},
                          <span>{{ $project->created_at->diffForHumans() }} </span>

                           @can('delete', $project)
                            <form action="{{ route('delete-project', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obriši projekat</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $project)
                                <a href="{{ route('update-project', $project) }}" class="float-right btn-secondary btn-sm mx-1">Azuriraj projekat</a>
                            @endcan


                    </th>
                </tr>


                    <tr>

                        <td>{{ $project->title }}</td>
                        <td>{!! Str::words($project->content, $limit = 7, $end = '...')   !!}</td>
                        <td><img src="{{ $project->image }}" alt="project_image" width="100"></td>
                    </tr>
@endif
            @endforeach
        </table>
        @else
            <p>Nijedan post nije unesen!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style')

@endsection
