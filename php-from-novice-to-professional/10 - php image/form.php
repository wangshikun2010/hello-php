<?php
require 'char.php';
debug($text,'$text');
debug($_GET, '$_GET');
debug($_POST, '$_POST');

function debug($data, $label) {
	echo $label, PHP_EOL;
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<img src="captcha.php"><br/>
	<input type="text" name="yanzhengma" required autofocus/><br/>
	<input type="submit" value="提交"/>
</form>

<?php
if (isset($_POST['yanzhengma'])){

	if ($_POST['yanzhengma'] == $text) {
        echo "你通过了验证！";
   	} else{
        echo "你输入的验证码错误！";
  	}
}
?>