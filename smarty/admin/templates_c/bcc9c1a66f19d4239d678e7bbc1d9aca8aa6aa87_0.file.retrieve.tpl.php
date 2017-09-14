<?php
/* Smarty version 3.1.30, created on 2017-09-14 15:29:27
  from "D:\phpStudy\WWW\feifan2\smarty\admin\web\retrieve.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba2fd79093b2_80745918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc9c1a66f19d4239d678e7bbc1d9aca8aa6aa87' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\admin\\web\\retrieve.tpl',
      1 => 1505374163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59ba2fd79093b2_80745918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2790559ba2fd7905537_76733136', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_819759ba2fd79093b8_10273222', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2790559ba2fd7905537_76733136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-md-6">
            <button onclick="Atime()">按添加时间显示</button>
            <button onclick="work()">默认排序</button>
  </div>
  <div>
      <form action="goodslist.php" method="get">
          <div class="input-group" style="margin-left: 10px">

            <input type="text" name='search' class="form-control" placeholder="Search for..." style="width: 80%">
            <span class="input-group-btn" style="margin-left:0px;float: left;">
              <button class="btn btn-default" type="submit" >Go!</button>
            </span>
          </div>
      </form>
    
  </div>

</div>



  <table class="table table-bordered">
      <tr align="center">
      	<th width="5%">序号</th>
        <th width="10%">分类</th>
      	<th width="20%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="10%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="15%" >操作</th>
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
		      <td class="info"><a href="restore.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return del()">还原</a></td>
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
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


  <div id='load' style="display: none">加载中<img src="../static/load.gif" width="5%"></div>
  
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_819759ba2fd79093b8_10273222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 type="text/javascript">
           function load(){
            var uuus=document.getElementById('id');
            var uuu=uuus.value;
              $.ajax({
                  type:'post',
                  url:'goodslist.php',
                  data:{
                    num:5,
                  },
                  success:function(data){
                     alert(data);
                     // uuu=data;
                     $('#load').hide();
                     //alert(data);
                     //window.location.assign("goodslist.php?num="+data);
                     uuus.value=data;
                  },
                  beforeSend:function(){
                    $('#load').show();
                  }
              });
           }

          function del(){
             return confirm('你确定还原吗');
          }

          function Atime(){
              window.location.assign("goodslist.php?Atime="+1);
          }
          function work(){
            window.location.assign("goodslist.php");
          }

      <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
}
