<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="iiii" method="post">
		<input type="text" name="_token" value="{{csrf_token()}}">
		<input type="text" name="name">
		<input type="submit" value="go">
	</form>
</body>
</html>