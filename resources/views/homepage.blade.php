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
            <input type="text" name="id" placeholder="user id">
            <input type="text" name="name" placeholder="user name">
            <button>Submit</button>
        </form>
    </div>
    
</body>
</html>