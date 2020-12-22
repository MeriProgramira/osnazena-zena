@extends('layouts.master')
@section('content')

<div class="site-blocks-cover overlay">

</div>

@include('partials/about_us')

@include('partials/mission')

<div class="empower justify-content-center d-flex flex-column align-items-center text-white px-3 text-center">
    <h1 class="empower-title">empower women</h1>
    <div class="container">
        <p class="empower-text">make stronger and more confident, especially in <br> controlling  their life,
            sharing a resource and claiming their rights</p>
    </div>

</div>

@include('partials.cookie_modal')




@endsection


