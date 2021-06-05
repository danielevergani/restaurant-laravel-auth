@extends('layouts.adminmain')

@section('title')
    elenco piatti
@endsection

@section('content')
<div class="container">
    <div class="titolo_add">
        <h1>ELENCO PIATTI</h1>
        <a class="add_dish" href="{{route('admin.dishes.create')}}"><i class="fas fa-plus-circle"></i></a>
    </div>
    
    @foreach ($dishes as $dish)
        <div class="piatto">
            <h3> {{$dish -> name}} </h3>
            <p> {{$dish -> ingredients}} </p>
            <p><strong>{{$dish -> price}} €</strong></p>
            <a href="{{route('admin.dishes.show', ['dish' => $dish -> id])}}">dettagli</a>
        </div>
    @endforeach
</div>
    
@endsection