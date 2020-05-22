<html>
<head>
</head>

<body>
   <div class="players">
    <ul>
        @foreach( $players as $player)
           <li> {{ $player->name }} </li>
        @endforeach
    </ul>
   </div>
</body>
</html>