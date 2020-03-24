@extends('videogames.layouts.layout')
@section('main')
        <div class="show-videogame">    
            <ul>
                <li>
                    <b>ID:</b> {{$videogame->id}}
                </li>   
                <li>
                    <b>Titolo:</b> {{$videogame->title}}
                </li>
                <li>
                    <b>Software House:</b> {{$videogame->software_house}}
                </li>
                <li>
                    <b>Genere:</b> {{$videogame->genre}}
                </li>
                <li>
                    <b>Prezzo:</b> {{$videogame->price}}€
                </li>
                <li>
                    <b>Data di uscita:</b> {{$videogame->release_date}}
                </li>
            </ul>
        </div>
@endsection