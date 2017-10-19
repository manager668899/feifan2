<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	{{$aa}}
	{{$data['a']}}
	{{url('home')}}

@foreach ($dd as $vv)
    <p>姓名是:{{$vv->name}}年龄是:{{$vv->age}}</p>     
@endforeach
</body>
</html>