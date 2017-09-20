<?php
/* Smarty version 3.1.30, created on 2017-09-20 09:58:40
  from "D:\phpStudy\WWW\feifan2\smarty\web\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c1cb50d630f3_40286897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f54c45b6ce61d00bd6222c4612cf044bebbb7313' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\register.tpl',
      1 => 1505872715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c1cb50d630f3_40286897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146359c1cb50d5f279_18561216', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2031159c1cb50d630f8_07569476', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_146359c1cb50d5f279_18561216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
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
      <div id='show' style="display: none">
       <h4>数据交互中...</h4>
       <img src="../static/timg.gif">
      </div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_2031159c1cb50d630f8_07569476 extends Smarty_Internal_Block
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
                            $('#show').hide();
              	   	   },
              	   	   beforeSend:function(){
              	   	   	    var user=$('input[name=user]').val();
              	   	   	    var pwd1=$('input[name=pwd]').val();
              	   	   	    var pwd2=$('input[name=pwd2]').val();
              	   	   	    if(user==''){
              	   	   	    	alert('用户名不能为空');
              	   	   	    	return false;
              	   	   	    }
              	   	   	    if(pwd1!=pwd2 || pwd1==''|| pwd1.length<6){
                                alert('两次密码不一致,或者密码为空,长度必须是6位以上');
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
