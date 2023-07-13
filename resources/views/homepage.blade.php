<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip Builder</title>
</head>
<body>
    <h1>Trip Builder</h1>
    <p><a href="/airports">All available airports</a></p>
    <div style="border:2px solid black;">
        <h2>Create a trip</h2>
        <form action="/trip" method="POST">
            @csrf
            <input type="text" name="name" placeholder="user name">
            <button>Submit</button>
        </form>
    </div>

    <div style="border:2px solid black;">
        <h2>Add a flight</h2>
        <form action="/trip/1/flights" method="POST">
            @csrf
            <input type="text" name="departureAirportCode" placeholder="departureAirportCode">
            <input type="text" name="destinationAirportCode" placeholder="destinationAirportCode">
            <input type="text" name="departureDate" placeholder="departureDate">
            <button>Submit</button>
        </form>
    </div>
    <form action="/trip/1/flight/1234" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="flightId" placeholder="flightId">
        <input type="text" name="destinationAirportCode" placeholder="tripId">
        <button>Delete</button>

    </form>
    
</body>
</html>