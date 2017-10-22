@extends('base/basev2')
@section('tttt','yyyy')
@section('head')
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script type="text/javascript" src="js/js.js" ></script>
@endsection


@section('body')
   @parent
   <h4>这里是继承的页面增加的内容</h4>
@endsection