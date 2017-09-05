<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="../jquery-3.2.1.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>图片上传插件</h1>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="idcard" type="file" multiple="true">
	</form>
	<div id="img">
			<img src="">
	</div>

	<script type="text/javascript">
		<?php $timestamp = time();?>
			$(function() {
			    $("#file_upload").uploadify({
			        //'swf'             : 'uploadify.swf',
			        'uploader'        : '../../DB/demo1.php',
			        'buttonText' : '图片上传',
			        'onUploadSuccess' : function(file, data, response) {
			            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
			             //alert(file.name);
                         //$('#img').html("file.data");
                         // console.log(data);
                         //console.log(file);
                         //console.log(response);
                          var obj=JSON.parse(data);

                         //$('#img').html("<img src='../../uploade/1504629985.png'>");
                          //alert("../"+obj.img);

                         $('#img').attr("src","../"+obj.img);
                         //$('#img').show();
			        }
			    });
			});
	</script>
</body>
</html>