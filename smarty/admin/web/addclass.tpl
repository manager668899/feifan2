{extends file='base/base.tpl'}
{block name='content'}
      <h4 class="btn btn-primary">添加分类</h4>
      <br/><br/>
      <table class="table">

				<tr align="center">
				  <td class="active" style="width: 120px">
		  	        	  <select class="form-control" style="width: 120px">
		  	        	   <option value="0">主分类</option>
				      	   {foreach $arr as $v}
							  <option    value="{$v['id']}">{$v['title']}</option>
						   {/foreach}
						  </select>
				  </td>
				  <td class="success" style="width: 120px">
				  	 <input type="text"  class="form-control" name="title" style="width: 150px">  
				  </td>
				  <td class="warning" style="width: 120px" id='addclass' >添加子级分类</td>
			 </tr> 
			 <span id='success'></span>
      </table>
{/block}
{block name ='js'}
 <script type="text/javascript">
           $(function(){
                id=0;
                $("select").change(function(){
                	id=$(this).val();
                });
                name ='';
                 $("input").change(function(){
                	name=$(this).val();
                });

               $("#addclass").click(function(){
                	   $.ajax({
                	   	    dataType:'json',
                	   	    type:'post',
                	   	    url:'addclass.php',
                	   	    data:{
                	   	    	ids:id,
                	   	    	names:name
                	   	    },
                	   	    success:function(data){
                                //alert(data.msg);
                                $('#success').html(data.msg);
                                 //add='';
                                 var add=data.asss;
                                $('select').append("<option>"+add+"</option>");
                                                       
                	   	    }
                	   });
                });
           });
   </script>
{/block}