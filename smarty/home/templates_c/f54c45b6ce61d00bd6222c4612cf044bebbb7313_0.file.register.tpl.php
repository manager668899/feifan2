<?php
/* Smarty version 3.1.30, created on 2017-09-06 17:55:55
  from "D:\phpStudy\WWW\feifan2\smarty\web\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afc62bbd8502_75625907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f54c45b6ce61d00bd6222c4612cf044bebbb7313' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\register.tpl',
      1 => 1504685718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59afc62bbd8502_75625907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3002559afc62bbcc983_39667281', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2762259afc62bbd4687_98461304', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_3002559afc62bbcc983_39667281 extends Smarty_Internal_Block
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
		  <div class="form-group">
		    <label for="exampleInputPassword1">确认密码</label>
		    <input type="password" name='pwd2' class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="button" class="btn btn-default" id='submit'>注册</button>
		</form>
    </div>
    <div class="col-md-4"></div>

<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2762259afc62bbd4687_98461304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <?php echo '<script'; ?>
 type="text/javascript">
    	  $(function(){
              $('#submit').click(function(){
              	   $.ajax({
              	   	   type:'post',
              	   	   url:'register.php',
              	   	   data:$('#form').serialize(),
              	   	   success:function(data){
                           var obj=JSON.parse(data);
                            alert(obj.msg);
              	   	   },
              	   	   beforeSend:function(){
              	   	   	    var user=$('input[name=user]').val();
              	   	   	    var pwd1=$('input[name=pwd]').val();
              	   	   	    var pwd2=$('input[name=pwd2]').val();
              	   	   	    if(user==''){
              	   	   	    	alert('用户名不能为空');
              	   	   	    	return false;
              	   	   	    }
              	   	   	    if(pwd1!=pwd2 || pwd1==''){
                                alert('两次密码不一致,或者密码为空');
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
