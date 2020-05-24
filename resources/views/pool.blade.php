<html>
<head>
</head>

<body>
<h1> Pools<h1>
@foreach($pools as $pool)
<a href='teams/{{ $pool->id }}'>{{ $pool->name }}</a> 
@endforeach

</body>
</html>
<!--

!-->