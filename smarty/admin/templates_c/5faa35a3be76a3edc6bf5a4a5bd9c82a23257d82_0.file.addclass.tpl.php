<?php
/* Smarty version 3.1.30, created on 2017-09-09 16:54:29
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\addclass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b3ac45126ef5_70799086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5faa35a3be76a3edc6bf5a4a5bd9c82a23257d82' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\addclass.tpl',
      1 => 1504947264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b3ac45126ef5_70799086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900359b3ac45123074_58076596', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_832359b3ac45126ef6_55381431', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1900359b3ac45123074_58076596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h4 class="btn btn-primary">添加分类</h4>
      <br/><br/>
      <table class="table">

				<tr align="center">
				  <td class="active" style="width: 120px">
		  	        	  <select class="form-control" style="width: 120px">
		  	        	   <option value="0">主分类</option>
				      	   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							  <option    value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
						   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						  </select>
				  </td>
				  <td class="success" style="width: 120px">
				  	 <input type="text"  class="form-control" name="title" style="width: 150px">  
				  </td>
				  <td class="warning" style="width: 120px" id='addclass' >添加子级分类</td>
			 </tr> 
			 <span id='success'></span>
      </table>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_832359b3ac45126ef6_55381431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php echo '<script'; ?>
 type="text/javascript">
           $(function(){
                id=0;
                $("select").change(function(){
                	id=$(this).val();
                });
                name ='';
                 $("input").change(function(){
                	name=$(this).val();
                });

               $("#addclass").click(function(){
                	   $.ajax({
                	   	    dataType:'json',
                	   	    type:'post',
                	   	    url:'addclass.php',
                	   	    data:{
                	   	    	ids:id,
                	   	    	names:name
                	   	    },
                	   	    success:function(data){
                                //alert(data.msg);
                                $('#success').html(data.msg);
                                 //add='';
                                 var add=data.asss;
                                $('select').append("<option>"+add+"</option>");
                                                       
                	   	    }
                	   });
                });
           });
   <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}