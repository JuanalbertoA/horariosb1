<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plazas</title>
</head>
<body>
    
    {{-- @dd($alumnos) --}}

    <ul>
        @foreach ($plazas as $plazas )
        <li>{{ $plazas->nombrePlaza}}</li>
        @endforeach
    
    </ul>

</body>
</html>