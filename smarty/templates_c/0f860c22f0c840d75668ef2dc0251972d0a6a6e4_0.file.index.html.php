<?php
/* Smarty version 3.1.30, created on 2017-09-04 11:41:19
  from "D:\phpStudy\WWW\feifan2\smarty\web\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59accb5fe8d4d2_66639361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f860c22f0c840d75668ef2dc0251972d0a6a6e4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\index.html',
      1 => 1504496443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_59accb5fe8d4d2_66639361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="static/jquery-3.2.1.js"><?php echo '</script'; ?>
>
</head>
<body>
	<form id='form'>
		 <input type="text" name="name">姓名<br/>
		 <input type="text" name="age">年龄<br/>
		 <input type="text" name="class">班级<br/>
		 <input type="text" name="hobby">爱好<br/>
		 <input type="text" name="sex">性别<br/>
		 <input type="button" value="注册" id="button">
	</form>


	<?php echo '<script'; ?>
 type="text/javascript">
		   $(function(){
               $('#button').click(function(){
               	    $.ajax({
               	    	type:"post",
               	    	url:"DB/demo.php",
               	    	data:$("#form").serialize(),
               	    	success:function(data){
                            alert(data);
               	    	}
               	    });
               });
		   });
	<?php echo '</script'; ?>
>
<?php echo md5('123456');?>


<?php $_smarty_tpl->_subTemplateRender("file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
