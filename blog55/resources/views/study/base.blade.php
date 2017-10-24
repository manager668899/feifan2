<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{url('bootstrap')}}/css/bootstrap.css">
</head>
<body>
	<div class="container">
		 @section('content')
		 @show
		
	</div>
	
</body>
</html>