{extends file='base/base.tpl'}
{block name='head'}
<link rel="stylesheet" type="text/css" href="../static/bootstrap/css/addgoods.css">
<script type="text/javascript" src="../static/bootstrap/js/jquery.validate.js"></script>
<script type="text/javascript" src="../static/bootstrap/js/jsAddress.js"></script>
<script type="text/javascript" src="../static/bootstrap/js/fileshow.js"> </script>
{/block}
{block name='content'}

  <form id='form' action="" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
            <td class="active" style="width: 120px">
              <select class="form-control" style="width: 120px" name='class'>
                   {foreach $arr as $v}
                          
            <option  value="{$v['id']}" {if $goods['classid']==$v['id']} selected="selected" {/if}>{str_repeat('->',$v['num'])}{$v['title']}</option>
                   {/foreach}
              </select>
          </td>

        <input type="hidden" name="id" value="{$goods['id']}">
        <h3>商品的修改</h3>
        <span>商品名称<span class="ttt">*</span></span>
        <input type="text" class="form-control required"  name="user" style="width:50%" value="{$goods['name']}" >

        <button type="button"  onclick="addstyle()"   class="btn btn-warning">添加属性</button><span class="ttt">*</span>
        <p id="p1"></p>
        <script type="text/javascript">
           function addstyle(){
              hhh = '<input type="text" name="style[]" class="aa"  value="" style="width:20%"/>';
              
                  document.getElementById("p1").innerHTML+=hhh+"属性<span class='ttt'>*</span><br/>";

                 }
        </script>
        {foreach $style as $vv}
           <input type="text" name="styleup[]" class="aa" value="{$vv['stylename']}" ><br/>
        {/foreach}

        <span>商品封面图<span class="ttt">*</span></span>

        <input type="file" name="idcard[]" onchange='jjj(this)'>

          <div id="preview">
            <img id="imghead" width=100 height=100 border=0 src='../uploade/{$goods['pic']}' >
         </div>
        <span>商品的价格<span class="ttt">*</span></span>
        <input type="text" class="form-control required" name="price" style="width:20%" value="{$goods['price']}" >
        <span>商品的库存数量<span class="ttt">*</span></span>
        <input type="text" class="form-control required" name="mun" style="width:20%" value="{$goods['mun']}" >
        <span>商品的产地<span class="ttt">*</span></span>
        

        <div>
          省：<select id="cmbProvince" name="address[]" ></select>
          市：<select id="cmbCity" name="address[]" ></select>
          区：<select id="cmbArea" name="address[]" ></select>
          <script type="text/javascript">
            addressInit('cmbProvince', 'cmbCity', 'cmbArea', '陕西', '西安市', '雁塔区');
            addressInit('Select1', 'Select2', 'Select3');
          </script>
          <input type="text"  placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%" ><span class="ttt">*</span>
        </div>
 


	      <script id="container" name="content" type="text/plain" style="height: 800px;">
          {$goods['content']}
        </script>
    <input type="submit" value='提交'>
  </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="../static/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="../static/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
        	autoFloatEnabled: true,

        	autoHeight: false
        });
    </script>
{/block}

{block name='js'}
 <script type="text/javascript">
        $(function(){
             $("#form").validate({
                  rules:{
                    user:{
                       required:true,
                       rangelength:[2,50]
                    },
                    price:{
                       required:true,
                       number:true
                    },
                    mun:{
                       required:true,
                       digits:true
                    }
                  },
                  messages:{
                        user:{
                          required:'商品的名称不能为空', 
                          rangelength:'商品的长度必须是2-50个字符直接'
                        },
                        price:{
                          required:'必须要填写',
                          number:'商品的价格格式不正确'
                        },
                        mun:{
                          required:'必须要填写数量',
                          digits:'商品的数量必须是整数'
                        }
                  }

             });
        })
        
   
    </script>
   
 
{/block}