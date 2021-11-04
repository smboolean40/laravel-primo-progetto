<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Home Page</title>
	</head>
	<body>
		<h1>Home Page</h1>
		<ul>
			<li><a href="/">Home Page</a></li>
			<li><a href="/chi-siamo">Chi Siamo</a></li>
			<li><a href="/contatti">Contatti</a></li>
		</ul>
		<h2>Mi chiamo {{$nome}} {{$cognome}}</h2>
		<h3>I miei amici sono:</h3>
		<ul>
			@foreach ($amici as $amico)
			<li>{{$amico}}</li>
			@endforeach
		</ul>
	</body>
</html>