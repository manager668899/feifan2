{extends file='base/base.tpl'}
{block name='content'}
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
       {foreach $buyArr as $vv}
		 <tr align="center" class="trssa">
		  <td><input type="checkbox" name="buyid" value="{$vv['id']}"  class="ss" ></td>
		  <td class="success">{$vv['name']}</td>
		  <td class="active">{$vv['goodsstyle']}</td>
		  <td class="success" >{$vv['price']}</td>
		  <td class="warning"><input type="text" name="mun" onchange="updete({$vv['id']},this.value,{$vv['price']})" value="{$vv['goodsmun']}" size="1"></td>
		  <td class="danger">...</td>
		  <td class="info" id="{$vv['id']}">{$vv['price']*$vv['goodsmun']}</td>
		</tr>
       {/foreach}
   </table>
   <p class='sun'>总价格</p>
    <button onclick="mybuy()">去结算</button>
</div>
{/block}
{block name='js'}
  <script type="text/javascript">
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

function nummm(){
  var vvvs= document.getElementsByClassName('info');
  var vvv = document.getElementsByClassName('ss'); 
  var trss= document.getElementsByClassName('trssa');
  console.log(trss);

            for (var i = 0; i < vvvs.length; i++) {
                 
                     console.log(vvvs[i].innerHTML);
                 
                  
            }


}
// var vvv = document.getElementsByClassName('ss'); 
// for (var i = 0; i < vvv.length; i++) {
//         vvv[i].onclick=function(){
//             alert(i);
//         }

// }

var cartTable=document.getElementsByClassName('table');



</script>

{/block}