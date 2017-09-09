<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../static/bootstrap/css/admin.css">
     <script src="../static/bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/bootstrap/js/bootstrap.min.js"></script>
    {block name="head"}{/block}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container-fluid">
        <ul class="nav nav-pills">
		  <li role="presentation" class="active"><a href="#">Home</a></li>
		  <li role="presentation"><a href="#">Profile</a></li>
		  <li role="presentation"><a href="#">Messages</a></li>
		  <li role="presentation"><a href="../index.php">前台首页</a></li>
		</ul>
     	    <div class="row cc">
			  <div class="col-md-2">
			       <ul class="list-unstyled">
					  <li>商品管理</li>
					  <li><a href="goodslist.php">...商品列表</a></li>
					  <li><a href="addgoods.php">...商品添加</a></li>
					  <li><a href="addclass.php">...商品分类</a></li>
					  <li>系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
					  <li>系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
					  <li>系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
					  <li>...系统管理</li>
				   </ul>

			  </div>
			  <div class="col-md-10">
			  	    {block name='content'}{/block}
			  </div>
			</div>
     </div>


