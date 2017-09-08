{extends file='base/base.tpl'}
{block name='content'}
      <form action="" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
        <span>商品名称</span>
        <input type="text" class="form-control"  name="name" style="width:50%" >
        <span>商品封面图</span>
        <input type="file" name="idcard[]">
         <span>商品封面图</span>
        <input type="file" name="idcard[]">
        <span>商品的价格</span>
        <input type="text" class="form-control" name="price" style="width:20%">
        <span>商品的库存数量</span>
        <input type="text" class="form-control" name="mun" style="width:20%">
        <span>商品的产地</span>
        <input type="text" class="form-control" name="address" style="width:50%" >
	<script id="container" name="content" type="text/plain" style="height: 800px;">
           
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