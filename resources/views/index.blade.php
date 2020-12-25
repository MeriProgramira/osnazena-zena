@extends('layouts.master')
@section('content')

<div class="site-blocks-cover overlay" >

</div>

@include('partials/about_us')

@include('partials/mission')

<div class="empower justify-content-center d-flex flex-column align-items-center text-white px-3 text-center">
    <h1 class="empower-title">Osnažite žene</h1>
    <div class="container">
        <p class="empower-text">da postanu  snažnije i samopuzdanije, <br> da uzmu vlastiti život u svoje ruke,<br>
        da se potpomažu i bore za svoja prava.<br></p>
    </div>

</div>

@include('partials.cookie_modal')




@endsection


