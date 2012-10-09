<html>
	<head>
		<title>浏览目录下的文件</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>文件名</td>
				<td>文件大小</td>
				<td>文件类型</td>
				<td>修改时间</td>
			</tr>
			<?php
				define('DS', DIRECTORY_SEPARATOR);
				$dirname = dirname(__FILE__) . DS;
				$dir_handle = opendir($dirname);
				while(($file = readdir($dir_handle)) !== false) {
					echo "<tr>";
					echo "<td>".$file."</td>";
					echo "<td>".filesize($dirname . $file)."</td>";
					echo "<td>".filetype($dirname . $file)."</td>";
					echo "<td>".date("Y年n月t日",filemtime($dirname . $file))."</td>";
					echo "</tr>";
				}
				closedir($dir_handle);
			?>
		</table>
	</body>
</html>