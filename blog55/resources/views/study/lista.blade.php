@extends('study.base')
@section('content')
<table class="table table-striped">
		 	<tr>
			  <th class="active" style="width:15%">姓名</th>
			  <th class="success" style="width:10%">年龄</th>
			  <th class="warning" style="width:15%">爱好</th>
			  <th class="danger" style="width:10%" >性别</th>
			  <th class="info" style="width:20%">班级</th>
			  <th class="info" style="width:30%">操作</th>
			</tr>
			@foreach($data as $vv)
		    <tr>
			  <td class="active">{{$vv->name}}</td>
			  <td class="success">{{$vv->age}}</td>
			  <td class="warning">{{$vv->relish}}</td>
			  <td class="danger">{{$vv->sex}}</td>
			  <td class="info">{{$vv->class}}</td>
			  <td class="active"><a href="ecd?id={{$vv->id}}">修改</a> 删除</td>
			</tr>
			@endforeach
		</table>
@endsection