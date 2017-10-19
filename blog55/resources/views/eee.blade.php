<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('fffa')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" name="name" value="{{ old('name') }}">
		<input type="text" name="pwd" value="{{ old('pwd') }}">
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
       {{$errors->first('name')}}
   @endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status')->first('name') }}
    </div>
@endif
<p>上面的错误是用的重定向闪存session</p>
<p>以下的错误是使用的命名错误包</p>
{{ $errors->login->first('name') }}

</body>
</html>