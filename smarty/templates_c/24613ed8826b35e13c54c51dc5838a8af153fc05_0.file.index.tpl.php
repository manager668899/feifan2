<?php
/* Smarty version 3.1.30, created on 2017-09-19 15:21:31
  from "D:\phpStudy\WWW\feifan2\smarty\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c135fb0a2074_75467641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24613ed8826b35e13c54c51dc5838a8af153fc05' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\index.tpl',
      1 => 1505834482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c135fb0a2074_75467641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3036259c135fb0a2075_10759741', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216359c135fb0a2077_10165477', 'content');
?>




    
<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_3036259c135fb0a2075_10759741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <link rel="stylesheet" type="text/css" href="static/bootstrap/css/home.css">
 <?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_216359c135fb0a2077_10165477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



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
          <div class="col-md-2">
              <a href=""><img src="uploade/150528917026203.jpg"></a>
              <p>九阳豆浆机</p>

         </div>
         <div class="col-md-2">
              <a href=""><img src="uploade/150528917026203.jpg"></a>
              <p>九阳豆浆机</p>
         </div>
         <div class="col-md-2">
              <a href=""><img src="uploade/150528917026203.jpg"></a>
              <p>九阳豆浆机</p>
         </div>
         <div class="col-md-2">
              <a href=""><img src="uploade/150528917026203.jpg"></a>
              <p>九阳豆浆机</p>
         </div>
         <div class="col-md-2">
             <a href=""><img src="uploade/150528917026203.jpg"></a>
             <p>九阳豆浆机</p>
         </div>
         <div class="col-md-2">
             <a href=""><img src="uploade/150528917026203.jpg"></a>
             <p>九阳豆浆机</p>
         </div>
    </div>


</div>


<?php
}
}
/* {/block 'content'} */
}
