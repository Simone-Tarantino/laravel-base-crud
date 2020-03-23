<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>