<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Home</title>
</head>
<body>
<table id="turnins">
    <tr>
        <th>Link</th>
        <th>Osztályzat</th>
        <th colspan="2">Leírás</th>
    </tr>
    @foreach ($list as $hw)
        <tr>
            <td><a href="{{ $hw->url }}">{{ $hw->url }}</a></td>
            <td>{{ $hw->grade }}</td>
            <td>{{ $hw->grade_details }}</td>
            <td>
                <a href="{{ route('homework.show', $hw->id) }}">Részletek</a>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="4"><a href="{{ route('homework.create') }}">Új beadás</a></td>
    </tr>
</table>
</body>
</html>
