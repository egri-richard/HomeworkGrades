<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beadás</title>
</head>
<body>
    <h1>Beadás</h1>
    <h3>Link: <a href="">{{ $hw->url }}</a></h3>
    <h4>Osztályat: {{ $hw->grade }}</h4>
    <p>{{ $hw->grade_details }}</p>
    
    <a href="{{ route('homework.edit', $hw->id) }}">Osztályzás</a>

    <p></p>

    <form method="POST" action="{{ route('homework.destroy', $hw->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Törlés">
    </form>

    <br>

    <a href="{{ route('homework.index') }}">Vissza</a>
</body>
</html>