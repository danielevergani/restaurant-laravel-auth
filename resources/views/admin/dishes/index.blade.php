@extends('layouts.adminmain')

@section('title')
    elenco piatti
@endsection

@section('content')
<div class="container">
    <h1>ELENCO PIATTI</h1>
    @foreach ($dishes as $dish)
        <div class="piatto">
            <h3> {{$dish -> name}} </h3>
            <p> {{$dish -> ingredients}} </p>
            <p><strong>{{$dish -> price}} €</strong></p>
            <a href="#">dettagli</a>
        </div>
    @endforeach
</div>
    
@endsection