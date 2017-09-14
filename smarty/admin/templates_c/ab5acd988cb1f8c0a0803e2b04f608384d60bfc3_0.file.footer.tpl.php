<?php
/* Smarty version 3.1.30, created on 2017-09-14 17:47:50
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\base\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba5046c3d388_40250562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5acd988cb1f8c0a0803e2b04f608384d60bfc3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\base\\footer.tpl',
      1 => 1505382466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba5046c3d388_40250562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1894959ba5046c3d384_22992417', 'js');
?>

    <?php echo '<script'; ?>
 type="text/javascript">
    	  function uuu(href) {
    	  	  $.ajax({
    	  	  	  url:href,
    	  	  	  type:'get',
    	  	  	  data:{},
    	  	  	  success:function(data){
                       setTimeout($('#uuu').hide(),5000);
    	  	  	  },
    	  	  	  beforeSend:function(){
    	  	  	  	   $('#uuu').show();
    	  	  	  }
    	  	  });
    	  }
    <?php echo '</script'; ?>
>
  </body>
</html><?php }
/* {block 'js'} */
class Block_1894959ba5046c3d384_22992417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
