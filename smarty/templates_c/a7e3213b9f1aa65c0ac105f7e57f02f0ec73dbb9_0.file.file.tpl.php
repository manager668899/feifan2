<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:25:29
  from "D:\phpStudy\WWW\feifan2\smarty\web\not\file.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af5c99f058e7_69751052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e3213b9f1aa65c0ac105f7e57f02f0ec73dbb9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\not\\file.tpl',
      1 => 1504603423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59af5c99f058e7_69751052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件的上传</title>
</head>
<body>
<!-- 	<form action="DB/demo.php" method="post" enctype="multipart/form-data">
		 <input type="text" name="name">身份证<br/>
		 <input type="file" name="idcard[]">正面<br/>
		 <input type="file" name="idcard[]">背面<br/>
		 <input type="submit" value='提交'>
	</form> -->

  <form action="DB/demo.php" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
        <input type="text" name="name">身份证<br/>
        <input type="file" name="idcard[]">正面<br/>
        <input type="file" name="idcard[]">背面<br/>
	<?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="height: 800px;">
           
    <?php echo '</script'; ?>
>

    <input type="submit" value='提交'>
  </form>
    <!-- 配置文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="static/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
    <!-- 编辑器源码文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="static/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
    <!-- 实例化编辑器 -->
    <?php echo '<script'; ?>
 type="text/javascript">
        var ue = UE.getEditor('container',{
        	autoFloatEnabled: true,

        	autoHeight: false
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
