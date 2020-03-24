@extends('videogames.layouts.layout')
@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <div class="form-container">
        <form action="{{route('videogames.update', $videogame->id)}}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$videogame->id}}">
            <input type="text" name="title" id="title" value="{{$videogame->title}}" placeholder="Inserisci il titolo">
            <input type="text" name="software_house" id="software_house" value="{{$videogame->software_house}}" placeholder="Inserisci la software house">
            <input type="text" name="genre" id="genre" value="{{$videogame->genre}}" placeholder="Inserisci il genere">
            <input type="date" name="release_date" id="release_date" value="{{$videogame->release_date}}">
            <input type="number" name="price" id="price" value="{{$videogame->price}}" placeholder="Inserisci il prezzo">
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection