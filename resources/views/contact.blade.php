<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Listes des contacts</h1>
	<ul>
		@foreach($contacts as $contact)
		<li>
			<h3>{{ $contact->name }}</h3>
			<p>{{$contact->message }}</p>
			<hr>
		</li>
		@endforeach
	</ul>
</body>
</html>