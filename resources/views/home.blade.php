@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">{{ __('Podaci o korisničkom računu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p> Ime korisnika: <span>{{ auth()->user()->user_name }}</span> </p>
                    <p> Datum kreiranja računa: <span> {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('d/m/Y')}} </span></p>
                    <p> Broj objavljenih postova: <span>{{ auth()->user()->posts()->count() }}</span></p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Podaci o postovima') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <ul class="nav justify-content-center" id="links">
                        @if (auth()->user())

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('all-posts') }}">Svi postovi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create-post') }}">Unesi novi post</a>
                        </li>
                        @endif
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('style')
<style>
    .card {
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-header {
        background-image: linear-gradient(to top, #f7b3d8 0%, #f8e1f3 100%);
    }

    span {
        color: #746e72;
        font-style: italic;
    }
</style>
@endsection

