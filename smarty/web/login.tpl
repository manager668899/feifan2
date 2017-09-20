{extends file='base/base.tpl'}
{block name='content'}
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
		  <button type="button" class="btn btn-default" id='submit'>登录</button>
		</form>
    </div>
    <div class="col-md-4"></div>

      <div id='show' style="display: none">
       <h4>数据交互中...</h4>
       <img src="../static/timg.gif">
      </div>
</div>
{/block}
{block name='js'}
  <script type="text/javascript">
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
  </script>

{/block}
