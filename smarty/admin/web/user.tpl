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
			      <a href="user.php?page={$page-$showpage}" aria-label="Previous">
			        <span aria-hidden="true">上{$showpage}页</span>
			      </a>
			    </li>
			    <li><a href="user.php?page={$page-1}">上一页</a></li>
			    <li><a href="user.php?page=1">首页</a></li>
			    {if $n>$showpage}
			        {$start=$page}
			        {$end=$showpage+$page}
                      {if $page+$showpage>$n}
                          {$end=$n}   
                      {/if}
			        {if $end>$n}
                         {$end=$n}    
			        {/if}      
			       
			    {/if}
                  
                  

                {for $foo=$start to $end}   
                 <li><a href="user.php?page={$foo}">{$foo}</a></li>
                {/for}
                <li><a href="user.php?page={$n}">尾页</a></li>
                <li><a href="user.php?page={$page+1}">下一页</a></li>
			    
			    <li>
			      <a href="user.php?page={$page+$showpage}" aria-label="Next">
			        <span aria-hidden="true">下{$showpage}页</span>
			      </a>
			    </li>
			     <li><a href="user.php">第{$page}页</a></li>
			  </ul>
			        
			        
	</nav>
{/block}