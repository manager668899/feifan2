
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    {block name='js'}{/block}
    <script type="text/javascript">
    	  function uuu(href) {
    	  	  $.ajax({
    	  	  	  url:href,
    	  	  	  type:'get',
    	  	  	  data:{},
    	  	  	  success:function(data){
                       setTimeout($('#uuu').hide(),5000);
    	  	  	  },
    	  	  	  beforeSend:function(){
    	  	  	  	   $('#uuu').show();
    	  	  	  }
    	  	  });
    	  }
    </script>
  </body>
</html>