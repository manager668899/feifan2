<?php
/* Smarty version 3.1.30, created on 2017-09-14 16:41:48
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bab14c111184_89639678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d434019aeee72c4d964c96e6ce0db436a345128' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\user.tpl',
      1 => 1505407303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bab14c111184_89639678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3184259bab14c111182_29082005', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_3184259bab14c111182_29082005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
    	 <tr>
    	 	 <th width="10%">姓名</th>
    	 	 <th width="20%">密码</th>
    	 	 <th width="10%">时间</th>
    	 </tr>
    	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    	 <tr>
    	 	  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
    	 	  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
    	 	  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
</td>
    	 </tr>
    	 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>

	<nav aria-label="Page navigation">
			  <ul class="pagination">
			    <li>
			      <a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="user.php?page=1">首页</a></li>
			        <?php if ($_smarty_tpl->tpl_vars['page']->value > 3) {?><li><a href="">...</a></li><?php }?>
                    
	                 <?php
$_smarty_tpl->tpl_vars['uu'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['uu']->step = 1;$_smarty_tpl->tpl_vars['uu']->total = (int) ceil(($_smarty_tpl->tpl_vars['uu']->step > 0 ? $_smarty_tpl->tpl_vars['n']->value+1 - ($_smarty_tpl->tpl_vars['page']->value) : $_smarty_tpl->tpl_vars['page']->value-($_smarty_tpl->tpl_vars['n']->value)+1)/abs($_smarty_tpl->tpl_vars['uu']->step));
if ($_smarty_tpl->tpl_vars['uu']->total > 0) {
for ($_smarty_tpl->tpl_vars['uu']->value = $_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->tpl_vars['uu']->iteration = 1;$_smarty_tpl->tpl_vars['uu']->iteration <= $_smarty_tpl->tpl_vars['uu']->total;$_smarty_tpl->tpl_vars['uu']->value += $_smarty_tpl->tpl_vars['uu']->step, $_smarty_tpl->tpl_vars['uu']->iteration++) {
$_smarty_tpl->tpl_vars['uu']->first = $_smarty_tpl->tpl_vars['uu']->iteration == 1;$_smarty_tpl->tpl_vars['uu']->last = $_smarty_tpl->tpl_vars['uu']->iteration == $_smarty_tpl->tpl_vars['uu']->total;?> 
					    <li><a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['uu']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['uu']->value;?>
</a></li>
					 <?php }
}
?>


			       <?php if ($_smarty_tpl->tpl_vars['page']->value < ($_smarty_tpl->tpl_vars['n']->value-$_smarty_tpl->tpl_vars['page']->value)) {?><li><a href="">...</a></li><?php }?>
			    <li><a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">尾页</a></li>
			    <li>
			      <a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
	</nav>
<?php
}
}
/* {/block 'content'} */
}
