{extends file='base/base.tpl'}
{block name='content'}
  <table class="table table-bordered">
      <tr align="center">
      	<th width="5%">序号</th>
        <th width="10%">分类</th>
      	<th width="20%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="10%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="15%" colspan="2">操作</th>
      </tr>
      {foreach $arr as $v}
      <tr align="center" >
      	  <td class="active">{$v['id']}</td>
          <td class="success">{$v['title']}</td>
		      <td class="success">{$v['name']}</td>
		      <td class="warning">{$v['price']}</td>
		      <td class="danger">{$v['mun']}</td>
		      <td class="info"><img src="../uploade/{$v['pic']}" width="30%"></td>
		      <td class="danger">{date('Y-m-d H:i:s',$v['times'])}</td>
		      <td class="info"><a href="">修改</a></td>
		      <td class="info"><a href="">删除</a></td>
      </tr>
      {/foreach}
  </table>
  <div id='load' style="display: none">加载中<img src="../static/load.gif" width="5%"></div>
  <div><button onclick="load()">加载</button></div>
{/block}
{block name='js'}
      <script type="text/javascript">
           function load(){
              $.ajax({
                  type:'post',
                  url:'goodslist.php',
                  data:{
                    num:20,
                  },
                  success:function(data){
                     
                     $('#load').hide();
                    // window.location.assign('goodslist.php');
                  },
                  beforeSend:function(){
                    $('#load').show();
                  }
              });
           }
      </script>

{/block}