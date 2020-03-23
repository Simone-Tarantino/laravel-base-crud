<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>