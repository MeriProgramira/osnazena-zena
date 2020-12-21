
@extends('layouts.app')
@section('content')

    <div class="container  mt-5 ">

    @if (auth()->user())
    <p><a class=" m-3" href="{{ route('dashboard') }}"> <b>Povratak na Dashboard</b> </a></p>

        <h3 class="text-uppercase">Sve vijesti  ({{ $news->count() }}) </h3>
        @if ($news->count())
        <table class="table mt-3">
            @foreach ($news as $new)

                @if (auth()->user()->id === $new->user_id || auth()->user()->role === 'admin')
                <tr>
                    <th colspan="3"
                        style="background-image: linear-gradient(to top, #f7b3d8 0%, #f8e1f3 100%);">{{ $new->user->user_name }},
                          <span>{{ $new->created_at->diffForHumans() }} </span>

                           @can('delete', $new)
                            <form action="{{ route('delete-new', $new) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obriši vijest</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $new)
                                <a href="{{ route('update-news', $new) }}" class="float-right btn-secondary btn-sm mx-1">Azuriraj vijest</a>
                            @endcan


                    </th>
                </tr>


                    <tr>

                        <td>{{ $new->title }}</td>
                        <td>{!! Str::words($new->content, $limit = 7, $end = '...')   !!}</td>
                        <td><img src="{{ $new->image }}" alt="project_image" width="100"></td>
                    </tr>
@endif
            @endforeach
        </table>
        @else
            <p>Nijedna vijest nije unesena!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style')

@endsection
