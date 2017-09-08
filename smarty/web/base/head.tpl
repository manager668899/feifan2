<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{$url}static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">
       <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="{$url}index.php">首页</a></li>

          <li role="presentation"><a href="#">购物车</a></li>
          <li role="presentation"><a href="#">个人中心</a></li>
          <li role="presentation"><a href="#">{if isset($smarty.session.user)}  {$smarty.session.user}<li role="presentation"><a href="{$url}home/unset.php">安全退出</a></li>
          {else}  <li role="presentation"><a href="{$url}home/login.php">登录</a></li>
          <li role="presentation"><a href="{$url}home/register.php">注册</a></li>{/if} </a></li>
      </ul>

   <div class="row">
       {block name='content'}
       {/block}
  </div>
  
</div>