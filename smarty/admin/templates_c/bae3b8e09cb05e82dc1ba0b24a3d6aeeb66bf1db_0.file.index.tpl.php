<?php
/* Smarty version 3.1.30, created on 2017-09-20 09:08:18
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c1bf828181b7_70167949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae3b8e09cb05e82dc1ba0b24a3d6aeeb66bf1db' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\index.tpl',
      1 => 1504854096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c1bf828181b7_70167949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1916759c1bf82814335_28634547', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1916759c1bf82814335_28634547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>欢迎光临</p>
<?php
}
}
/* {/block 'content'} */
}
