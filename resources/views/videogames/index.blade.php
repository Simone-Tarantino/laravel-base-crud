@extends('videogames.layouts.layout')
@section('main')
    @foreach ($videogames as $videogame)
        <a href="{{route('videogames.show', $videogame['id'])}}">
            <div class="videogame">    
                <ul>
                    <li>
                        ID: {{$videogame->id}}
                    </li>   
                    <li>
                        Titolo: {{$videogame->title}}
                    </li>
                    <li>
                        Software House: {{$videogame->software_house}}
                    </li>
                    <li>
                        Genere: {{$videogame->genre}}
                    </li>
                    <li>
                        Prezzo: {{$videogame->price}}€
                    </li>
                    <li>
                        Data di uscita: {{$videogame->release_date}}
                    </li>
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
                </ul>
            </div>
        </a> 
    @endforeach
@endsection
   