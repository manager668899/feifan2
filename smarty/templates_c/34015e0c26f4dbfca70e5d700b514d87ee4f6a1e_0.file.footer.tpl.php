<?php
/* Smarty version 3.1.30, created on 2017-09-06 15:26:43
  from "D:\phpStudy\WWW\feifan2\smarty\web\base\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afa333291141_56855924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34015e0c26f4dbfca70e5d700b514d87ee4f6a1e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\base\\footer.tpl',
      1 => 1504680393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59afa333291141_56855924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528159afa333291144_72312451', 'js');
?>

  </body>
</html><?php }
/* {block 'js'} */
class Block_528159afa333291144_72312451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
