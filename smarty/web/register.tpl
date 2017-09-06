{extends file='base/base.tpl'}
{block name='content'}
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

{/block}
{block name='js'}
       <script type="text/javascript">
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
    </script>
{/block}