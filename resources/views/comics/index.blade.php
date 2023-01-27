<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{ $utente }}</h1>
    @foreach ($fumetti as $fumetto)
        <h2>{{ $fumetto->title }}</h2>
        <h3>{{ $fumetto->description }}</h3>
    @endforeach
</body>
</html>
