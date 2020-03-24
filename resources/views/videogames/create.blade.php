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
        <form action="{{route('videogames.store')}}" method="post">
            @csrf
            @method('POST')
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo">
            <input type="text" name="software_house" id="software_house" placeholder="Inserisci la software house">
            <input type="text" name="genre" id="genre" placeholder="Inserisci il genere">
            <input type="date" name="release_date" id="release_date">
            <input type="number" name="price" id="price" placeholder="Inserisci il prezzo">
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
    