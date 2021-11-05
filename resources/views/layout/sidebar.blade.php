<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>@yield('title', 'Titolo di default') | Sito Ufficiale</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		@include('partials.header')
		<main>

			<div style="float:left; width: 70%">
			@yield('pageContent')
			</div>
			<aside style="float: right; width: 30%">
				<h3>Sidebar</h3>
				<ul>
					<li>Link utili</li>
					<li>Link utili</li>
					<li>Link utili</li>
					<li>Link utili</li>
					<li>Link utili</li>
				</ul>
			</aside>
		</main>
	</body>
</html>