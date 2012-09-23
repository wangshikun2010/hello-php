<h1><?php echo date("Y-m-d H:i:s"); ?></h1>

<?php
$links = array(
	array("http://www.baidu.com", "Baidu"),
	array("http://www.yahoo.com", "Yahoo!"),
	array("http://www.google.com", "Google"),
	array("http://www.google.com", "Google"),
	array("http://www.google.com", "Google"),
	array("http://www.yahoo.com", "Yahoo!"),
	array("http://www.google.com", "Google"),
	array("http://www.yahoo.com", "Yahoo!"),
	array("http://www.yahoo.com", "Yahoo!"),
	array("http://www.google.com", "Google"),
	array("http://www.yahoo.com", "Yahoo!"),
	array("http://www.google.com", "Google"),
);

if (!empty($_POST)) {
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	if ($_POST["username"] === "admin") {
		echo "Welcome, Admin!";
		exit();
	}
}

?>

<ul>
	<?php foreach ($links as $link) { ?>
		<li><a href="<?php echo $link[0]; ?>"><?php echo $link[1]; ?></a></li>
	<?php } ?>
</ul>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
	<label for="username">用户名</label>
	<input type="text" name="username" id="username" required><br>
	<label for="password">密码</label>
	<input type="password" name="password" id="password" required><br>
	<input type="submit">
</form>