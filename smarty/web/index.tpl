{extends file='base/base.tpl'}
 {block name='head'}
 <link rel="stylesheet" type="text/css" href="static/bootstrap/css/home.css">
 {/block}
{block name='content'}

<div class="container-fluid">
      <div class='heada row'>
         <div id='logo'>
           <img src="static/timg.gif" style="width: 150px;height: 150px;">
         </div>
          <form class="input-group searchID" action="http://wwww.baidu.com" method="get">
                <input type="text" class="form-control search" name="search">
               <span class="input-group-btn">
                   <button class="btn btn-default" type="submit">搜索</button>
               </span>
          </form>
      </div> 
</div>

<div class="container">
    <div class="row contentId">
         <div class="col-md-2 leftlist">
              <ul class="list-group list">
                    <li>家电</li>
                    <li>数码</li>
                    <li>母婴</li>
              </ul> 
         </div>

         <div class="col-md-8 imgId">
 
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                       <div class="item active">
                         <img src="static/img/1.jpg" alt="...">
                            <div class="carousel-caption">
                            <h3>HHHHH</h3>
                            <p>sfsdfkskdfk</p>
                          </div>
                       </div>
                       <div class="item">
                         <img src="static/img/2.jpg" alt="...">
                              <div class="carousel-caption">
                               <h3>HHHHH</h3>
                               <p>sfsdfkskdfk</p>
                            </div>
                       </div>
                       <div class="item">
                         <img src="static/img/3.jpg" alt="...">
                              <div class="carousel-caption">
                              <h3>HHHHH</h3>
                              <p>sfsdfkskdfk</p>
                             </div>
                       </div>
                       
                     </div>

                     <!-- Controls -->
                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
              </div>
         </div>

         <div class="col-md-2 rightlist">
              dddffffffffff
         </div>

    </div>

    <hr/>
    <div class="row shopa">

      {foreach $arrgoods as $v}
          <div class="col-md-2">
              <a href="{$url}home/goodsinfo.php?id={$v['id']}"><img src="uploade/{$v['pic']}"></a>
              <p>{$v['name']}</p>

         </div>
      {/foreach}
         
    </div>


</div>


{/block}



    
