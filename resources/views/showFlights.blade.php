<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip Builder</title>
</head>
<body>
    <h1>Trips</h1>
    @foreach($flights as $flight)
    <div style="border:2px solid black;">
        {{-- {{print_r($flights)}} --}}
        FlightId: {{$flight['id']}} 
        <br>
        TripId: {{$flight['tripId']}}
        <br>
        departureAirportCode: {{$flight['departureAirportCode']}}
        <br>
        destinationAirportCode: {{$flight['destinationAirportCode']}}
        <br>
        departureDate: {{$flight['departureDate']}}
        <br>
    </div>
    @endforeach
    <p><a href="/">Back</a></p>
</body>
</html>