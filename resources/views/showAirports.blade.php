<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip Builder</title>
</head>
<body>
    <h1>Airports</h1>
    @foreach($airports as $airport)
        {{$airport}}
    @endforeach
</body>
</html>