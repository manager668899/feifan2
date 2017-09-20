<?php
/* Smarty version 3.1.30, created on 2017-09-20 10:11:04
  from "D:\phpStudy\WWW\feifan2\smarty\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c1ce385faae2_80652844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24613ed8826b35e13c54c51dc5838a8af153fc05' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\index.tpl',
      1 => 1505873459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c1ce385faae2_80652844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2631459c1ce385df555_29077110', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3164159c1ce385faae3_17168711', 'content');
?>




    
<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_2631459c1ce385df555_29077110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <link rel="stylesheet" type="text/css" href="static/bootstrap/css/home.css">
 <?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_3164159c1ce385faae3_17168711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container-fluid">
      <div class='heada row'>
         <div id='logo'>
           <img src="static/timg.gif" style="width: 150px;height: 150px;">
         </div>
          <form class="input-group searchID" action="http://wwww.baidu.com" method="get">
                <input type="text" class="form-control search" name="search">
               <span class="input-group-btn">
                   <button class="btn btn-default" type="submit">搜索</button>
               </span>
          </form>
      </div> 
</div>

<div class="container">
    <div class="row contentId">
         <div class="col-md-2 leftlist">
              <ul class="list-group list">
                    <li>家电</li>
                    <li>数码</li>
                    <li>母婴</li>
              </ul> 
         </div>

         <div class="col-md-8 imgId">
 
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                       <div class="item active">
                         <img src="static/img/1.jpg" alt="...">
                            <div class="carousel-caption">
                            <h3>HHHHH</h3>
                            <p>sfsdfkskdfk</p>
                          </div>
                       </div>
                       <div class="item">
                         <img src="static/img/2.jpg" alt="...">
                              <div class="carousel-caption">
                               <h3>HHHHH</h3>
                               <p>sfsdfkskdfk</p>
                            </div>
                       </div>
                       <div class="item">
                         <img src="static/img/3.jpg" alt="...">
                              <div class="carousel-caption">
                              <h3>HHHHH</h3>
                              <p>sfsdfkskdfk</p>
                             </div>
                       </div>
                       
                     </div>

                     <!-- Controls -->
                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
              </div>
         </div>

         <div class="col-md-2 rightlist">
              dddffffffffff
         </div>

    </div>

    <hr/>
    <div class="row shopa">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrgoods']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <div class="col-md-2">
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/goodsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="uploade/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"></a>
              <p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>

         </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         
    </div>


</div>


<?php
}
}
/* {/block 'content'} */
}
