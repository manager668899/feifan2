<?php
/* Smarty version 3.1.30, created on 2017-09-18 15:47:13
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bfea81c933b5_46381253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d434019aeee72c4d964c96e6ce0db436a345128' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\user.tpl',
      1 => 1505749629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bfea81c933b5_46381253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407459bfea81c933b7_20832632', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1407459bfea81c933b7_20832632 extends Smarty_Internal_Block
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
			  <li><a href="">每页显示<?php echo $_smarty_tpl->tpl_vars['showlist']->value;?>
条</a></li>
			    <li>
			      <a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-$_smarty_tpl->tpl_vars['showpage']->value;?>
" aria-label="Previous">
			        <span aria-hidden="true">上<?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
页</span>
			      </a>
			    </li>
			    <li><a href="user.php?page=1">首页</a></li>
			    <?php if ($_smarty_tpl->tpl_vars['n']->value > $_smarty_tpl->tpl_vars['showpage']->value) {?>
			        <?php $_smarty_tpl->_assignInScope('start', $_smarty_tpl->tpl_vars['page']->value);
?>
			        <?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['showpage']->value+$_smarty_tpl->tpl_vars['page']->value);
?>
                      <?php if ($_smarty_tpl->tpl_vars['page']->value+$_smarty_tpl->tpl_vars['showpage']->value > $_smarty_tpl->tpl_vars['n']->value) {?>
                          <?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['n']->value);
?>   
                      <?php }?>
			        <?php if ($_smarty_tpl->tpl_vars['end']->value > $_smarty_tpl->tpl_vars['n']->value) {?>
                         <?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['n']->value);
?>    
			        <?php }?>      
			       
			    <?php }?>
                  
                  

                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>   
                 <li><a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                <?php }
}
?>

			    <li><a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">尾页</a></li>
			    <li>
			      <a href="user.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+$_smarty_tpl->tpl_vars['showpage']->value;?>
" aria-label="Next">
			        <span aria-hidden="true">下<?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
页</span>
			      </a>
			    </li>
			     <li><a href="user.php">第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</a></li>
			  </ul>
			        
			        
	</nav>
<?php
}
}
/* {/block 'content'} */
}
