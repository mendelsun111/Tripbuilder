<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip Builder</title>
</head>
<body>
    <h1>Trips</h1>
    @foreach($trips as $trip)
    <div style="border:2px solid black;">
        userId: {{$trip['id']}} 
        <br>
        userName: {{$trip['name']}}
        <br>
    </div>
    @endforeach
    <p><a href="/">Back</a></p>
</body>
</html>