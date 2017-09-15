{extends file='base/base.tpl'}
{block name='content'}
    <table class="table">
    	 <tr>
    	 	 <th width="10%">姓名</th>
    	 	 <th width="20%">密码</th>
    	 	 <th width="10%">时间</th>
    	 </tr>
    	 {foreach $arr as $v}
    	 <tr>
    	 	  <td>{$v['name']}</td>
    	 	  <td>{$v['age']}</td>
    	 	  <td>{$v['class']}</td>
    	 </tr>
    	 {/foreach}
    </table>

	<nav aria-label="Page navigation">

			  <ul class="pagination">
			  <li><a href="">每页显示{$showpage}条</a></li>
			    <li>
			      <a href="user.php?page={$page-1}" aria-label="Previous">
			        <span aria-hidden="true">&laquo;上一页</span>
			      </a>
			    </li>
			    <li><a href="user.php?page=1">首页</a></li>
			        {if $page>3}<li><a href="">...</a></li>{/if}

	                 {for $uu=1 to 5} 
					    <li><a href="user.php?page={$uu}">{$uu}</a></li>
					 {/for}

			       {if $page<($n-$page)}<li><a href="">...</a></li>{/if}
			    <li><a href="user.php?page={$n}">尾页</a></li>
			    <li>
			      <a href="user.php?page={$page+1}" aria-label="Next">
			        <span aria-hidden="true">&raquo;下一页</span>
			      </a>
			    </li>
			  </ul>
	</nav>
{/block}