<?php
/* Smarty version 3.1.30, created on 2017-09-04 14:39:05
  from "D:\phpStudy\WWW\feifan2\smarty\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59acf509f34c16_70643691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24613ed8826b35e13c54c51dc5838a8af153fc05' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\index.tpl',
      1 => 1504506842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.html' => 1,
  ),
),false)) {
function content_59acf509f34c16_70643691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3249359acf509f0db08_81342063', 'text');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_999559acf509f30d93_02243881', 'content');
?>

    
<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'text'} */
class Block_3249359acf509f0db08_81342063 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <p>kkkkkkkkkkkk</p>
<?php
}
}
/* {/block 'text'} */
/* {block 'content'} */
class Block_999559acf509f30d93_02243881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <hr/>

  
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
       <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 


    <?php if ($_smarty_tpl->tpl_vars['arr']->value['aa'] == 'AAAAA') {?>
        <span>AAAA</span>
        <?php } else { ?>
        <span>BBBB</span>
    <?php }?>
  

<?php
}
}
/* {/block 'content'} */
}
