<?php

debug($_GET, '$_GET');
debug($_POST, '$_POST');
debug($_FILES, '$_FILES');
debug($_SERVER, '$_SERVER');

function debug($data, $label) {
	echo $label, PHP_EOL;
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

var_dump(is_null(null));

// require 'not-exists.php';

?>
<html>
<head>
	<title>Super Globals in PHP</title>
</head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" enctype="multipart/form-data">
		<label>
			Username:
			<input type="text" name="username" required autofocus>
		</label><br>
		<label>
			Password:
			<input type="password" name="password" required>
		</label><br>
		<!--
		<label>
			File:
			<input type="file" name="srt" required><br>
			<input type="file" name="caf" required><br>
		</label><br>
		-->
		<input type="submit" value="submit">
	</form>
</body>
</html>