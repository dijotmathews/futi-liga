<html>
<head>
</head>

<body>
<h1>Players</h1>
   <div class="players">
    <ul>
    
        @foreach( $players as $player)
        <li> {{ $player->name }}</li> 
        @endforeach
        
        
    </ul>
   </div>
</body>
</html>