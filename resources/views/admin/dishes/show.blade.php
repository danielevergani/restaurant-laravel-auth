@extends('layouts.adminmain')

@section('title')
    elenco piatti
@endsection

@section('content')
<div class="container">
    <a href="{{route('admin.dishes.index')}}">home</a>
    <h1>{{$dish -> name}}</h1>
    <img src="{{asset('storage/' . $dish->image)}}" alt="">
    <p> {{$dish -> ingredients}} </p>
    <p><strong>{{$dish -> price}} €</strong> </p>
</div>
    

@endsection