@extends('videogames.layouts.layout')
@section('main')
    <div class="container">
        @foreach ($videogames as $videogame)
            <a href="{{route('videogames.show', $videogame['id'])}}">
                <div class="videogame">    
                    <ul>
                        <li>
                            <b>ID</b>: {{$videogame->id}}
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
                        <div class="buttons">
                            <li>
                                <form action="{{route('videogames.edit', $videogame->id)}}">
                                    <button type="submit">EDIT</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{route('videogames.destroy', $videogame->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">DELETE</button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </div>
            </a> 
        @endforeach
    </div>
@endsection
   