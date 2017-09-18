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
			  <li><a href="">每页显示{$showlist}条</a></li>
			    <li>
			      <a href="user.php?page={$page-1}" aria-label="Previous">
			        <span aria-hidden="true">&laquo;上一页</span>
			      </a>
			    </li>
			    <li><a href="user.php?page=1">首页</a></li>
			        {if $n>$showpage}
			               {if $page>$pageoffset+1}<li><a href="user.php">...</a></li>{/if}
			           {if $page>$pageoffset}
			              {$start=$page-$pageoffset}
                               
			              {if $n>$page+$pageoffset}
			                   {$end=$page+$pageoffset}
			                {else}
			                   {$end=$n}
			                {/if}

			            {/if}
			            
			            {else}
	                          {$star=1}
	                       {if $n>$showpage}
	                          {$end=$showpage}
	                       {else}
	                         {$end=$n}
	                       {/if} 

	                       {if $page+$pageoffset>$n}
	                          {$start=$start-($page+$pageoffset-$end)}
	                       {/if}

			        {/if}

                {for $foo=$start to $end}   
                 <li><a href="user.php?page={$foo}">{$foo}</a></li>
                {/for}
			        {if $n>$showpage && $n>$page+$pageoffset}<li><a href="user.php">...</a></li>{/if}
			    <li><a href="user.php?page={$n}">尾页</a></li>
			    <li>
			      <a href="user.php?page={$page+1}" aria-label="Next">
			        <span aria-hidden="true">&raquo;下一页</span>
			      </a>
			    </li>
			     <li><a href="user.php">第{$page}页</a></li>
			  </ul>
	</nav>
{/block}