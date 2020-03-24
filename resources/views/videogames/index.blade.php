    @extends('videogames.layouts.layout')
    @section('main')
        @foreach ($videogames as $videogame)
            <ul>
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
            </ul>
        @endforeach    
    @endsection
   