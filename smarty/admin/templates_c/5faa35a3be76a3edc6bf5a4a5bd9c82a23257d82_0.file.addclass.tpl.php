<?php
/* Smarty version 3.1.30, created on 2017-09-11 14:47:20
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\addclass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b63178dea283_60838332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5faa35a3be76a3edc6bf5a4a5bd9c82a23257d82' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\addclass.tpl',
      1 => 1505112402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b63178dea283_60838332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_329359b63178de2580_96321989', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2290559b63178dea284_02961553', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_329359b63178de2580_96321989 extends Smarty_Internal_Block
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
"><?php echo str_repeat('->',$_smarty_tpl->tpl_vars['v']->value['num']);
echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
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
				  <td class="warning " style="width: 120px" id='addclass' >点击我添加分类</td>
			 </tr> 
			 <span id='success'></span>
      </table>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2290559b63178dea284_02961553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php echo '<script'; ?>
 type="text/javascript">
           $(function(){
               var id=0;
                $("select").change(function(){
                	id=$(this).val();
                });
               var  name ='';
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
                                var host=  window.location.hostname;
                                var filename=window.location.pathname;
                                var http=window.location.protocol;
                                //alert(http+host+filename);
                                window.location.assign("addclass.php");

                                // $('#success').html(data.msg);
                                //  var add=data.asss;
                                //  var inid=data.inserID;
                                // $('select').append("<option value="+inid+">"+add+"</option>");
                               
                                                       
                	   	    },
                          beforeSend:function(){
                              if(name==''){
                                  return false;
                              }
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
