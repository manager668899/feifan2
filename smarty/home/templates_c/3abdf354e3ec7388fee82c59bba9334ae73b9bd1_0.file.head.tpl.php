<?php
/* Smarty version 3.1.30, created on 2017-09-19 14:37:25
  from "D:\phpStudy\WWW\feifan2\smarty\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c12ba501fc60_05791900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3abdf354e3ec7388fee82c59bba9334ae73b9bd1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\base\\head.tpl',
      1 => 1505831806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c12ba501fc60_05791900 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/css/homebase.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2768559c12ba5017f68_10469109', 'head');
?>

  </head>
  <body>
<div class="container">
   <div  class="row">
      <div class="col-md-12">
           <ul class="nav  nav-tabs">
              <li role="presentation" class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php">首页</a></li>

              <li role="presentation"><a href="#">购物车</a></li>
              <li role="presentation"><a href="#">个人中心</a></li>
              <li role="presentation"><a href="#"><?php if (isset($_SESSION['user'])) {?>  <?php echo $_SESSION['user'];?>
<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/unset.php">安全退出</a></li>
              <?php } else { ?>  <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/login.php">登录</a></li>
              <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/register.php">注册</a></li><?php }?> </a></li>
          </ul>
      </div>
   </div>
</div>
<div class="container-fluid">
      <div class='heada row'>
         <div id='logo'>
           ddd
         </div>
          <form class="input-group searchID" action="http://wwww.baidu.com" method="get">
                <input type="text" class="form-control search" name="search">
               <span class="input-group-btn">
                   <button class="btn btn-default" type="submit">搜索</button>
               </span>
          </form>
      </div> 
</div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3212859c12ba501fc67_49762646', 'content');
?>

<?php }
/* {block 'head'} */
class Block_2768559c12ba5017f68_10469109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_3212859c12ba501fc67_49762646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


       <?php
}
}
/* {/block 'content'} */
}
