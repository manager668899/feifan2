<?php
/* Smarty version 3.1.30, created on 2017-09-13 15:49:36
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b9539037bf30_11079797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7be918b3f1dc59ca2ca82863ca1aad7e53ba6c37' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\1.tpl',
      1 => 1505317768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b9539037bf30_11079797 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <table class="table table-bordered">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <tr align="center" >
      	  <td class="active"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
          <td class="success"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
		      <td class="success"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
		      <td class="warning"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
		      <td class="danger"><?php echo $_smarty_tpl->tpl_vars['v']->value['mun'];?>
</td>
		      <td class="info"><img src="../uploade/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="30%"></td>
		      <td class="danger"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['times']);?>
</td>
		      <td class="info"><a href="">修改</a></td>
		      <td class="info"><a href="">删除</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      
  </table><?php }
}
