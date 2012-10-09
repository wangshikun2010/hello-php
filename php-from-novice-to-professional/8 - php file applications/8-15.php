<html>
	<head>
		<title>文件上传的前台页面</title>
	</head>
	<body>
		<form enctype="multipart/form-data" action="upload.php" method="post">
			<input type="file" name="upfile"/>
			<input type="submit" value="提交"/>
			<input type="reset" value="重新选择"/>
		</form>
	</body>
</html>