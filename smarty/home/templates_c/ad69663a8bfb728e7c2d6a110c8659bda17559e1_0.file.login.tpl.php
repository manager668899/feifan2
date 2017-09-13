<?php
/* Smarty version 3.1.30, created on 2017-09-13 09:59:07
  from "D:\phpStudy\WWW\feifan2\smarty\web\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b890eb9f4987_57865942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad69663a8bfb728e7c2d6a110c8659bda17559e1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\login.tpl',
      1 => 1505267854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b890eb9f4987_57865942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075359b890eb9f0b00_61121221', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2732559b890eb9f4987_91909311', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2075359b890eb9f0b00_61121221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <div class="col-md-4"></div>
    <div class="col-md-4">
    	  <form id='form'>
		  <div class="form-group">
		    <label for="exampleInputEmail1">用户名</label>
		    <input type="text" name='user' class="form-control" id="exampleInputEmail1" placeholder="用户名">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码</label>
		    <input type="password" name='pwd' class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="button" class="btn btn-default" id='submit'>登录</button>
		</form>
    </div>
    <div class="col-md-4"></div>

      <div id='show' style="display: none">
       <h4>数据交互中...</h4>
       <img src="../static/timg.gif">
      </div>

<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2732559b890eb9f4987_91909311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
 type="text/javascript">
    	  $(function(){
              $('#submit').click(function(){
              	   $.ajax({
              	   	   type:'post',
              	   	   url:'login.php',
              	   	   data:$('#form').serialize(),
              	   	   success:function(data){
                           var obj=JSON.parse(data);

                            if(obj.status==1){
                            	  window.history.back();
                            }
                            alert(obj.msg);
              	   	   },
              	   	   beforeSend:function(){
              	   	   	    var user=$('input[name=user]').val();
              	   	   	    var pwd1=$('input[name=pwd]').val();
              	   	   	 
              	   	   	    if(user==''){
              	   	   	    	alert('用户名不能为空');
              	   	   	    	return false;
              	   	   	    }
              	   	   	    if(pwd1==''){
              	   	   	    	alert('密码不能为空');
              	   	   	    	return false;
              	   	   	    }
                            $('#show').show();
              	   	   	    
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
