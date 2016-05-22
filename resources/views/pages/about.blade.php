@extends('app')

@section('content')

<h1>About me</h1>

@if(count($people))
    <h3>People I need</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif
<p>
    Aute incurreret ea minim aute. Sed nam sunt velit velit, ingeniis quid iudicem o 
    summis laborum si possumus, id fore tractavissent. Offendit amet te deserunt 
    arbitrantur. Officia duis sint quo quem, esse officia eu efflorescere. Multos an 
    proident ubi nisi, mentitum amet ubi deserunt praesentibus ut expetendis amet 
    voluptate te cernantur elit ubi consequa.
</p>

@stop