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
							  <option    value="{$v['id']}">{str_repeat('->',$v['num'])}{$v['title']}</option>
						   {/foreach}
						  </select>
				  </td>
				  <td class="success" style="width: 120px">
				  	 <input type="text"  class="form-control" name="title" style="width: 150px">  
				  </td>
				  <td class="warning " style="width: 120px" id='addclass' >点击我添加分类</td>
			 </tr> 
			 <span id='success'></span>
      </table>
{/block}
{block name ='js'}
 <script type="text/javascript">
           $(function(){
               var id=0;
                $("select").change(function(){
                	id=$(this).val();
                });
               var  name ='';
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
                                // var host=  window.location.hostname;
                                // var filename=window.location.pathname;
                                // var http=window.location.protocol;
                                //alert(http+host+filename);
                                window.location.assign("addclass.php");

                                // $('#success').html(data.msg);
                                //  var add=data.asss;
                                //  var inid=data.inserID;
                                // $('select').append("<option value="+inid+">"+add+"</option>");
                               
                                                       
                	   	    },
                          beforeSend:function(){
                              if(name==''){
                                  return false;
                              }
                          }
                	   });
                });
           });
   </script>
{/block}