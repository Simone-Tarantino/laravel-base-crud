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
                {{$videogame->title}}
            </li>
            <li>
                {{$videogame->software_house}}
            </li>
            <li>
                {{$videogame->genre}}
            </li>
            <li>
                {{$videogame->price}}
            </li>
            <li>
                {{$videogame->release_date}}
            </li>
        </ul>
    @endforeach
</body>
</html>