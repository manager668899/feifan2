{extends file='base/base.tpl'}
{block name='head'}
<link rel="stylesheet" type="text/css" href="{$url}static/bootstrap/css/goodsinfo.css">
{/block}
{block name='content'}
<div class="container">
	<div class="row">
		 <div class="col-md-5">
		 	 <div class="pic">
		 	 	<img src="../uploade/{$goods['pic']}" width="350px">
		 	 </div>
		   
		  </div>
		 <div class="col-md-7">
		      <h4>{$goods['name']}</h4>
		      <h5>价格{$goods['price']}</h5>
		      
		      	<form action="buy.php" method="post">
		      	  <input type="hidden" name="ids" value="{$goods['id']}">
		      	  <input type="hidden" name="price" value="{$goods['price']}">
		      	<ul class="ula">
		      	{foreach $style as $vv}
                   <li><input type="checkbox" class="style" name="style[]" value="{$vv['stylename']}" />{$vv['stylename']}</li>
		      	{/foreach}
		        </ul>
		        <input type="text" name="num" size="2" value="1">数量
		        <input type="submit" value="加入购物车">
		       </form>
		 </div>
	</div>
</div>

{/block}
{block name ='js'}

  <script type="text/javascript">
      var  boj= document.getElementsByClassName('style')
      var gg='';
  	    function buy(){
  	    	for(i=0;i<boj.length;i++){
		  	    		if(boj[i].checked)
		  	    		{
		                    gg+=boj[i].value+"," ;
		  	    		}     
                 };

          //alert(document.cookie);
          alert(gg);

  	    }



  </script>
{/block}