<?php
/* Smarty version 3.1.30, created on 2017-09-13 15:53:44
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\goodslist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b9548842c764_32280469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242551d8571970bba18cd24423187c03f97ced06' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\goodslist.tpl',
      1 => 1505318020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b9548842c764_32280469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1232959b9548842c767_37453756', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3140459b9548842c761_54141930', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1232959b9548842c767_37453756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <table class="table table-bordered">
      <tr align="center">
      	<th width="5%">序号</th>
        <th width="10%">分类</th>
      	<th width="20%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="10%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="15%" colspan="2">操作</th>
      </tr>
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

      
  </table>
  <div id='load' style="display: none">加载中<img src="../static/load.gif" width="5%"></div>
  <div>
      <button onclick="load()">加载</button>

  </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_3140459b9548842c761_54141930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 type="text/javascript">
           function load(){
              $.ajax({
                  type:'post',
                  url:'goodslist.php',
                  data:{
                    num:5,
                  },
                  success:function(data){
                     
                     $('#load').hide();
                     //alert(data);
                     window.location.assign('goodslist.php');
                  },
                  beforeSend:function(){
                    $('#load').show();
                  }
              });
           }
      <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
}
