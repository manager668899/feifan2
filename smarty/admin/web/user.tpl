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
			    <li>
			      <a href="user.php?page={$page-1}" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="user.php?page=1">首页</a></li>
			        {if $page>3}<li><a href="">...</a></li>{/if}

			    <li><a href="user.php?page={$page}">{$page}</a></li>
			    <li><a href="user.php?page={$page+1}">{$page+1}</a></li>
			    <li><a href="user.php?page={$page+2}">{$page+2}</a></li>
			    <li><a href="user.php?page={$page+3}">{$page+3}</a></li>
			    <li><a href="user.php?page={$page+4}">{$page+4}</a></li>
			    <li><a href="user.php?page={$page+5}">{$page+5}</a></li>
			    <li><a href="user.php?page={$page+6}">{$page+6}</a></li>
			    <li><a href="user.php?page={$page+7}">{$page+7}</a></li>
			       {if $page<($n-$page)}<li><a href="">...</a></li>{/if}
			    <li><a href="user.php?page={$n}">尾页</a></li>
			    <li>
			      <a href="user.php?page={$page+1}" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
	</nav>
{/block}