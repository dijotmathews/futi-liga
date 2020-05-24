<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of teams</title>
    <style>
    #playertable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    </style>
</head>
<body>
    <div class="team">

    <table border = "1" id="playertable">
    <tr>
    <th>Name</th><th>Won</th><th>Loss</th><th>Draw</th><th>Points</th><th>Coach</th><th>Pool ID</th>
    </tr>
    @foreach($teams as $team)
    <tr>
    <td> <a href='players/{{ $team->id }}'>{{ $team->name }}</a></td>
    <td>{{ $team->won }}</td>
    <td>{{ $team->loss }}</td>
    <td>{{ $team->draw }}</td>
    <td>{{ $team->point }}</td>
    <td>{{ $team->coach }}</td>
    <td>{{ $team->pool_id }}</td>
    </tr>
    @endforeach
    
     </div>
</body>
</html>