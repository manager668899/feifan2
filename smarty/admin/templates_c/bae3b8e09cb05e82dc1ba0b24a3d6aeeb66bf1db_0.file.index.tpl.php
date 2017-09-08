<?php
/* Smarty version 3.1.30, created on 2017-09-08 15:01:39
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b240530e41d2_52645596',
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
function content_59b240530e41d2_52645596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_826359b240530e41d0_60118167', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_826359b240530e41d0_60118167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>欢迎光临</p>
<?php
}
}
/* {/block 'content'} */
}
