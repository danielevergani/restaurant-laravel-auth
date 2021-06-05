@extends('layouts.adminmain')

@section('title')
    aggiungi piatto
@endsection

@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1>nuovo piatto</h1>
    <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="name" >Nome del piatto</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="ins il nome del piatto">
        </div>
        <div class="form-group">
            <label for="ingredients" >ingredienti</label>
            <textarea class="form-control"  name="ingredients" id="ingredients" cols="20" rows="10" placeholder="inserisci gli ingredienti"></textarea>
        </div>
        <div class="form-group">
            <label for="price" >prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="ins il prezzo">
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" id="image" name="image" placeholder="Image">
        </div>
        @foreach ($allergenes as $allergene)
        <div class="form-group">
            <input class="form-check-input" type="checkbox" value="{{$allergene->id}}" id="{{$allergene->name}}" name="allergenes[]">
            <label class="form-check-label" for="{{$allergene->name}}">
                {{$allergene->name}}
            </label>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection