<?php
/* Smarty version 3.1.30, created on 2017-09-13 17:42:04
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\addgoods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b8fd6cc16b31_75499230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99302110306788138034c49bca95c49531d8adb4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\addgoods.tpl',
      1 => 1505282792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b8fd6cc16b31_75499230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1708359b8fd6cbf38a6_59401569', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_521759b8fd6cc12cb1_70236902', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646059b8fd6cc16b34_17633811', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_1708359b8fd6cbf38a6_59401569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="../static/bootstrap/css/addgoods.css">
<?php echo '<script'; ?>
 type="text/javascript" src="../static/bootstrap/js/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../static/bootstrap/js/jsAddress.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../static/bootstrap/js/fileshow.js"> <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_521759b8fd6cc12cb1_70236902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <form id='form' action="" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
            <td class="active" style="width: 120px">
              <select class="form-control" style="width: 120px" name='class'>
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


        <h3>商品的添加</h3>
        <span>商品名称<span class="ttt">*</span></span>
        <input type="text" class="form-control required"  name="user" style="width:50%" >

        <button type="button"  onclick="addstyle()"   class="btn btn-warning">添加属性</button><span class="ttt">*</span>
        <p id="p1"></p>
        <?php echo '<script'; ?>
 type="text/javascript">
           function addstyle(){
              hhh = '<input type="text" name="style[]" class="aa"  value="" style="width:20%"/>';
              
                  document.getElementById("p1").innerHTML+=hhh+"属性<span class='ttt'>*</span><br/>";

                 }
        <?php echo '</script'; ?>
>

        <span>商品封面图<span class="ttt">*</span></span>
        <input type="file" name="idcard[]" onchange='jjj(this)'>
          <div id="preview">
            <img id="imghead" width=100 height=100 border=0 src='blankmain.jpg' >
         </div>
         <span>商品封面图<span class="ttt">*</span></span>
        <input type="file" name="idcard[]" onchange='jjjj(this)'>
          <div id="previews">
            <img id="imgheads" width=100 height=100 border=0 src='blank.jpg'>
         </div>
        <span>商品的价格<span class="ttt">*</span></span>
        <input type="text" class="form-control required" name="price" style="width:20%">
        <span>商品的库存数量<span class="ttt">*</span></span>
        <input type="text" class="form-control required" name="mun" style="width:20%">
        <span>商品的产地<span class="ttt">*</span></span>
        

        <div>
          省：<select id="cmbProvince" name="address[]" ></select>
          市：<select id="cmbCity" name="address[]" ></select>
          区：<select id="cmbArea" name="address[]" ></select>
          <?php echo '<script'; ?>
 type="text/javascript">
            addressInit('cmbProvince', 'cmbCity', 'cmbArea', '陕西', '西安市', '雁塔区');
            addressInit('Select1', 'Select2', 'Select3');
          <?php echo '</script'; ?>
>
          <input type="text"  placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%" ><span class="ttt">*</span>
        </div>
 


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
/* {block 'js'} */
class Block_1646059b8fd6cc16b34_17633811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
             $("#form").validate({
                  rules:{
                    user:{
                       required:true,
                       rangelength:[2,50]
                    },
                    price:{
                       required:true,
                       number:true
                    },
                    mun:{
                       required:true,
                       digits:true
                    }
                  },
                  messages:{
                        user:{
                          required:'商品的名称不能为空', 
                          rangelength:'商品的长度必须是2-50个字符直接'
                        },
                        price:{
                          required:'必须要填写',
                          number:'商品的价格格式不正确'
                        },
                        mun:{
                          required:'必须要填写数量',
                          digits:'商品的数量必须是整数'
                        }
                  }

             });
        })
        

        /////
   
    <?php echo '</script'; ?>
>
   
 
<?php
}
}
/* {/block 'js'} */
}
