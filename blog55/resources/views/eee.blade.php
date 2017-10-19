<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('fffa')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" name="name">
		<input type="text" name="pwd">
		<input type="submit"  value="go">
	</form>

	@if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
       {{$errors->first('name')}};
   @endif


</body>
</html>