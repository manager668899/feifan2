<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件的上传</title>
</head>
<body>
<!-- 	<form action="DB/demo.php" method="post" enctype="multipart/form-data">
		 <input type="text" name="name">身份证<br/>
		 <input type="file" name="idcard[]">正面<br/>
		 <input type="file" name="idcard[]">背面<br/>
		 <input type="submit" value='提交'>
	</form> -->

  <form action="DB/demo.php" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
        <input type="text" name="name">身份证<br/>
        <input type="file" name="idcard[]">正面<br/>
        <input type="file" name="idcard[]">背面<br/>
	<script id="container" name="content" type="text/plain" style="height: 800px;">
           
    </script>

    <input type="submit" value='提交'>
  </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="static/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="static/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
        	autoFloatEnabled: true,

        	autoHeight: false
        });
    </script>
</body>
</html>