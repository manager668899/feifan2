{extends file='head.html'}
{block name='text'}
   <p>kkkkkkkkkkkk</p>
{/block}


{block name='content'}
    {$content}
    <hr/>

  
    {foreach $arr as $v}
       {$v}
    {/foreach} 


    {if $arr['aa']=='AAAAA'}
        <span>AAAA</span>
        {else}
        <span>BBBB</span>
    {/if}
  

{/block}
    
