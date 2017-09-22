<?php
/* Smarty version 3.1.30, created on 2017-09-22 12:40:06
  from "D:\phpStudy\WWW\feifan2\smarty\web\buy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c494260ea692_80134194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33637f72fcc8b49c8f914f60727b2f48003cf22' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\feifan2\\smarty\\web\\buy.tpl',
      1 => 1506055180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59c494260ea692_80134194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2586959c494260dac98_95846932', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_665659c494260e6814_62642716', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2586959c494260dac98_95846932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">

   <table class="table">
   	   <tr align="center">
   	       <td style="width: 5%">全选<input type="checkbox" class='all' onclick="aa()" name=""></td>
   	   	   <td style="width: 25%">商品的名称</td>
   	   	   <td style="width: 20%">型号</td>
   	   	   <td style="width: 10%">商品的单价</td>
   	   	   <td style="width: 10%">商品的数量</td>
   	   	   <td style="width: 20%">商品的图片</td>
   	   	   <td style="width: 10%">合计价格</td>
   	   </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buyArr']->value, 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
		 <tr align="center" class="trssa">
		  <td><input type="checkbox" name="buyid" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"  class="ss" onclick="check(this)"></td>
		  <td class="success"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</td>
		  <td class="active"><?php echo $_smarty_tpl->tpl_vars['vv']->value['goodsstyle'];?>
</td>
		  <td class="success" ><?php echo $_smarty_tpl->tpl_vars['vv']->value['price'];?>
</td>
		  <td class="warning"><input type="text" name="mun" onchange="updete(<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
,this.value,<?php echo $_smarty_tpl->tpl_vars['vv']->value['price'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['goodsmun'];?>
" size="1"></td>
		  <td class="danger">...</td>
		  <td class="info" id="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['price']*$_smarty_tpl->tpl_vars['vv']->value['goodsmun'];?>
</td>
		</tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </table>
   <p class='sun'>总价格</p>
    <button onclick="mybuy()">去结算</button>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_665659c494260e6814_62642716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
 type="text/javascript">
/*ajax传递数据修改数量*/
  	   function updete(id,value,price){
              $.ajax({
              	  type:'post',
              	  url:'updatebuy.php',
              	  data:{
              	  	 ids:id,
              	  	 values:value,
                     prices:price
              	  },
              	  success:function(data){
                     var num=JSON.parse(data);
                     //window.location.assign('buy.php');
                     $("#"+id).html(num);
                     
              	  },
                  beforeSend:function(){
                        var r = /^\+?[1-9][0-9]*$/;　　//正整数
                        var flag=r.test(value);    
                        if(flag){
                            return true;
                        }else{
                            alert('商品数量出错');
                            return false;
                        }
                  }

              });
  	   }
  
/*全选和反选*/
function aa(){
  var all = document.getElementsByClassName('all');
  var sss = document.getElementsByClassName('ss'); 
     for(i=0;i<sss.length;i++){
                      if(sss[i].checked==false){
                         sss[i].checked=true
                      }else{
                        sss[i].checked=false;
                      }
                     
                 };  


}
/*点击结算发送数据*/
function mybuy(){
   var sss = document.getElementsByClassName('ss');
   var aas=new Array();
            for (var i = 0; i < sss.length; i++) {
                 if(sss[i].checked){
                    aas[i]=sss[i].value;
                 }
                  
            }


    $.ajax({
        type:'post',
        url:'pay.php',
        data:{
           pay:aas
        },
        success:function(data){
           alert(data);
        },
        beforeSend:function(){
           if(aas==''){
              alert('请选择商品');
              return false;
           }
        }
    })
      
}
/*点击计算出价格*/
var total=0;
function check(n){
  row=n.parentNode.parentNode.rowIndex;
  //alert(row);
  //var price=new Array();
  var  price=document.getElementsByClassName("info").item(row-1).innerHTML;
      console.log(price);
      //alert(typeof(document.getElementsByClassName("info").item(row-1).innerHTML));
      //alert(document.getElementsByClassName("ss").item(row-1).checked);
      if(document.getElementsByClassName("ss").item(row-1).checked==true){
      //  alert();
       total=total+parseFloat(document.getElementsByClassName("info").item(row-1).innerHTML);
        $('.sun').html(total);
      }else{
       // alert("取消选中");
        total=0;
        for(var i=0;i<document.getElementsByClassName("ss").length;i++){
               if(document.getElementsByClassName("ss").item(i).checked==true){
          //  alert();
           total=total+parseFloat(document.getElementsByClassName("info").item(i).innerHTML);
            $('.sun').html(total);
          }
        }
      }
}


/*测试代码无效*/
function aaaa (){
    var info= document.getElementsByClassName('info');
    var trss= document.getElementsByClassName('trss');
    //console.log(trss[0].children[1].innerHTML);
    for (var i = 0; i < trss.length; i++) {
          console.log(trss[i].children[6].innerHTML);

    }

    for (var i = 0; i < info.length; i++) {
           //console.log(info[i].innerHTML); 
    }

}
nummm();

function nummm(){
  var vvvs= document.getElementsByClassName('info');
   vvv = document.getElementsByClassName('ss'); 
  var trss= document.getElementsByClassName('trssa');
  //console.log(trss);

            for (var i = 0; i < trss.length; i++) {
                 
                     // console.log(trss[i].children[6].innerHTML);//得到价格
                    
                  
            }



}





// var vvv = document.getElementsByClassName('ss'); 
// for (var i = 0; i < vvv.length; i++) {
//         vvv[i].onclick=function(){
//             alert(i);
//         }

// }

var cartTable=document.getElementsByClassName('table');



<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
}
