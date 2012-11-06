<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Examples</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">
</head>
<body>
    <form action='11-6.php' method='post'>
    	<label for="">
    		请输入用户名:
    		<input type='text' name='username' require/>
    	</label>
    	<label for="">
    		请输入密码:
    		<input type='password' name='password' require/>
    	</label>
    	<select name='time' id='time'>
    		<option value='1'>不保存</option>
    		<option value='2'>保存一天</option>
    		<option value='3'>保存一月</option>
    		<option value='4'>保存一年</option>
    	</select>
    	<input type='submit' value='确定'>
    </form>
</body>
</html>
