{extends file='base/base.tpl'}
{block name='content'}
<div class="row">
  <div class="col-md-6">
            <button onclick="Atime()">按添加时间显示</button>
            <button onclick="work()">默认排序</button>
  </div>
  <div>
      <form action="goodslist.php" method="get">
          <div class="input-group" style="margin-left: 10px">

            <input type="text" name='search' class="form-control" placeholder="Search for..." style="width: 80%">
            <span class="input-group-btn" style="margin-left:0px;float: left;">
              <button class="btn btn-default" type="submit" >Go!</button>
            </span>
          </div>
      </form>
    
  </div>

</div>



  <table class="table table-bordered">
      <tr align="center">
      	<th width="5%">序号</th>
        <th width="10%">分类</th>
      	<th width="20%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="10%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="15%" >操作</th>
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
		      <td class="info"><a href="restore.php?id={$v['id']}" onclick="return del()">还原</a></td>
      </tr>
      {/foreach}
      
  </table>


<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


  <div id='load' style="display: none">加载中<img src="../static/load.gif" width="5%"></div>
  {*<!---<div>
      <button onclick="load()">加载</button>
      <input id='id' type="text" value="" size="1" >
  </div>-->*}
{/block}
{block name='js'}
      <script type="text/javascript">
           function load(){
            var uuus=document.getElementById('id');
            var uuu=uuus.value;
              $.ajax({
                  type:'post',
                  url:'goodslist.php',
                  data:{
                    num:5,
                  },
                  success:function(data){
                     alert(data);
                     // uuu=data;
                     $('#load').hide();
                     //alert(data);
                     //window.location.assign("goodslist.php?num="+data);
                     uuus.value=data;
                  },
                  beforeSend:function(){
                    $('#load').show();
                  }
              });
           }

          function del(){
             return confirm('你确定还原吗');
          }

          function Atime(){
              window.location.assign("goodslist.php?Atime="+1);
          }
          function work(){
            window.location.assign("goodslist.php");
          }

      </script>

{/block}
