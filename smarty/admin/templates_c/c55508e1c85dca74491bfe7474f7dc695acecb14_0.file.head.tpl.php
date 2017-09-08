<?php
/* Smarty version 3.1.30, created on 2017-09-08 16:21:49
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b2531d29e006_50861421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55508e1c85dca74491bfe7474f7dc695acecb14' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\base\\head.tpl',
      1 => 1504858906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b2531d29e006_50861421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
					  <li>...系统管理</li>
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
			  	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2570959b2531d29e002_72388811', 'content');
?>

			  </div>
			</div>
     </div>


<?php }
/* {block 'content'} */
class Block_2570959b2531d29e002_72388811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
