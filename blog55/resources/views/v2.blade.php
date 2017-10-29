@extends('base/basev2')
@section('tttt','yyyy')
@section('head')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/base.css') }}">
  <script type="text/javascript" src="{{ URL::asset('js/js.js') }}" ></script>
@endsection


@section('body')
   @parent
   <h4>这里是继承的页面增加的内容</h4>
   {{$name}}{{$age}}
   {{md5('123456')}}
   {{time()}}
   {{date('Y-m-d H:i:s',1508722173)}}
   {!$name!}
   @if(!empty($name))
      <p>非空</p>
   @endif

   @if(isset($ff))
      <p>设置</p>
   @else
      <p>没有设置</p>
   @endif

   @unless (Auth::check())
    你尚未登录。
   @endunless

   @isset($name)
      <p>设置</p>
   @endisset
   @empty(!$name)
     <p>空</p>
   @endempty

   @switch($age)
     @case(10)
       <p>10岁了</p>
       @break
     @case(18)
        <p>18岁了</p>
      @break
     @default
       <p>默认是5岁</p>
     @endswitch
@for($i=0;$i<=10;$i++)
   {{$i}}
@endfor

@foreach($data as $vv)
    {{$vv}}
@endforeach


@forelse ($datas as $user)
    <li>{{ $user }}</li>
@empty
    <p>没有用户</p>
@endforelse

{{--<!-- <p>skfskfdkljj</p> @if-->--}}

@include('base.div')

<div class="container">
    @foreach ($users as $user)
        {{ $user->name }}
    @endforeach
</div>

{{ $users->links() }}

@endsection