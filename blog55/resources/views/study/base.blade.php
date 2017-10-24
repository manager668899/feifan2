<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{url('bootstrap')}}/css/bootstrap.css">
	<script type="text/javascript" src="{{url('js')}}/jquery-3.2.1.js"></script>
	<meta name="_token" content="{{ csrf_token() }}"/>
</head>
<body>
	<div class="container">
		 @section('content')
		 @show
		
	</div>
	 @section('js')
	 @show
</body>
</html>