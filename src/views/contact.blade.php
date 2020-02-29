<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
<h1>Contact Us</h1>
<form method="post" action="{{route('submit')}}">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="submit" >
</form>
</body>
</html>
