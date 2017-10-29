<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>基础</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/base.css') }}">
	@section('head')
	@show
</head>
<body>
	<h3>@yield('tttt')</h3>
	@section('body')
	   <p>这里是父类的内容</p>

	@show
</body>
</html>