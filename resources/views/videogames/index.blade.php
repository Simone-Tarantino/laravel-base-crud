@extends('videogames.layouts.layout')
@section('main')
    <div class="container">
        @foreach ($videogames as $videogame)
            <div class="videogame" data-number="{{$videogame->id}}>    
                <a href="{{route('videogames.show', $videogame['id'])}}">
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
                    </a> 
                        <div class="buttons">
                            <li>
                                <form action="{{route('videogames.edit', $videogame->id)}}">
                                    <button type="submit">EDIT</button>
                                </form>
                            </li>
                            <li>
                                <button class="are-you-sure" data-number="{{$videogame->id}}">DELETE</button>
                            </li>
                        </div>
                    </ul>
                    <div class="pop-up" data-number="{{$videogame->id}}">
                        <h2>Sei sicuro di voler cancellare questa voce?</h2>
                        <form action="{{route('videogames.destroy', $videogame->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </div>
                </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection
   