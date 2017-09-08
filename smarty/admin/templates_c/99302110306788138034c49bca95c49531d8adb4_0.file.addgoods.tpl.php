<?php
/* Smarty version 3.1.30, created on 2017-09-08 17:21:13
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\addgoods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b261095aab50_66215923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302110306788138034c49bca95c49531d8adb4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\addgoods.tpl',
      1 => 1504862470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b261095aab50_66215923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1308959b261095aab54_67860283', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1308959b261095aab54_67860283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <form action="DB/demo.php" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
        <span>商品名称</span>
        <input type="text" class="form-control"  name="name" style="width:50%" >
        <span>商品封面图</span>
        <input type="file" name="idcard[]">
         <span>商品封面图</span>
        <input type="file" name="idcard[]">
        <span>商品的价格</span>
        <input type="text" class="form-control" name="price" style="width:20%">
        <span>商品的库存数量</span>
        <input type="text" class="form-control" name="mun" style="width:20%">
        <span>商品的产地</span>
        <input type="text" class="form-control" name="address" style="width:50%" >
	<?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="height: 800px;">
           
    <?php echo '</script'; ?>
>

    <input type="submit" value='提交'>
  </form>
    <!-- 配置文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
    <!-- 编辑器源码文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
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
<?php
}
}
/* {/block 'content'} */
}
