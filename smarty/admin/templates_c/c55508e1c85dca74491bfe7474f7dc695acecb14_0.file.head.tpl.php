<?php
/* Smarty version 3.1.30, created on 2017-09-14 13:22:56
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba82b05b2d28_81311165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55508e1c85dca74491bfe7474f7dc695acecb14' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\base\\head.tpl',
      1 => 1505395342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba82b05b2d28_81311165 (Smarty_Internal_Template $_smarty_tpl) {
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
     <?php echo '<script'; ?>
 src="../static/bootstrap/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="../static/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70959ba82b05b2d28_12282095', "head");
?>


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
         <div id='uuu' style="text-align: center; position: absolute;z-index:5;left: 30%;display: none">数据加载中
         </div>
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
					  <li><a href="goodslist.php" onclick="uuu(this.href)">...商品列表</a></li>
					  <li><a href="addgoods.php" onclick="uuu(this.href)">...商品添加</a></li>
					  <li><a href="addclass.php" onclick="uuu(this.href)">...商品分类</a></li>
					  <li><a href="retrieve.php" onclick="uuu(this.href)">...回收站</a></li>
					  <li>用户管理</li>
					  <li><a href="user.php">...会员列表</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931759ba82b05b2d26_92948906', 'content');
?>

			  </div>
			</div>
     </div>


<?php }
/* {block "head"} */
class Block_70959ba82b05b2d28_12282095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block 'content'} */
class Block_931759ba82b05b2d26_92948906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
