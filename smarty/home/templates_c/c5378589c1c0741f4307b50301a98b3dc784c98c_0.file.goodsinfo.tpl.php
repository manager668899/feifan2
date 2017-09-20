<?php
/* Smarty version 3.1.30, created on 2017-09-20 16:29:53
  from "D:\phpStudy\WWW\feifan2\smarty\web\goodsinfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c227019ea036_24866333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5378589c1c0741f4307b50301a98b3dc784c98c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\goodsinfo.tpl',
      1 => 1505896183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c227019ea036_24866333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2169459c227019ceaa4_04229352', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528259c227019e61b9_81713927', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2223859c227019ea039_39308931', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_2169459c227019ceaa4_04229352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/css/goodsinfo.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_528259c227019e61b9_81713927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		 <div class="col-md-5">
		 	 <div class="pic">
		 	 	<img src="../uploade/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" width="350px">
		 	 </div>
		   
		  </div>
		 <div class="col-md-7">
		      <h4><?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
</h4>
		      <h5>价格<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</h5>
		      
		      	<form action="buy.php" method="post">
		      	  <input type="hidden" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
		      	  <input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
">
		      	<ul class="ula">
		      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['style']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                   <li><input type="checkbox" class="style" name="style[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['stylename'];?>
" /><?php echo $_smarty_tpl->tpl_vars['vv']->value['stylename'];?>
</li>
		      	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		        </ul>
		        <input type="text" name="num" size="2" value="1">数量
		        <input type="submit" value="加入购物车">
		       </form>
		 </div>
	</div>
</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2223859c227019ea039_39308931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php echo '<script'; ?>
 type="text/javascript">
      var  boj= document.getElementsByClassName('style')
      var gg='';
  	    function buy(){
  	    	for(i=0;i<boj.length;i++){
		  	    		if(boj[i].checked)
		  	    		{
		                    gg+=boj[i].value+"," ;
		  	    		}     
                 };

          //alert(document.cookie);
          alert(gg);

  	    }



  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
