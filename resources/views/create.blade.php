<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Új Beadás</title>
</head>
<body>
    <h1>Új beadás</h1>
    <form method="POST" action="{{ route('homework.store') }}">
        @csrf
        <p>URL: </p><input name="url" type="text">
        @error('url')
            <p>{{ $message }}</p>
        @enderror

        <p>Osztályzat: </p><input name="grade" type="number">
        @error('grade')
            <p>{{ $message }}</p>
        @enderror   

        <p>Indoklás: </p><input name="grade_details" type="text">

        <input type="submit" value="Beadás">
    </form>

    <br>

    <a href="{{ route('homework.index') }}">Vissza</a>
</body>
</html>