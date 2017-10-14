<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('fff')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" name="name">
		<input type="text" name="pwd">
		<input type="submit"  value="go">
	</form>
</body>
</html>