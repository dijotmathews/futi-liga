<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of teams</title>
</head>
<body>
    <div class="team">
    <ul>
    @foreach($teams as $team)

     <li> <a href='players/{{ $team->id }}'>{{ $team->name }}</a>
        <ul>
        @foreach($team->players as $player) 
            <li>{{ $player->name }}</li>
        @endforeach
        </ul>
     
     </li>
    @endforeach
    </ul>
    
    </div>

</body>
</html>