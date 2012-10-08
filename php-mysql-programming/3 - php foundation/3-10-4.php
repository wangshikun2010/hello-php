<?php
$links = array("www.baidu.com","www.google.com","www.sohu.com");
echo "online Resources </b><br/>";
foreach($links as $link) {
	echo "<a href=\"http//:$link\">$link</a><br/>";
}

$links = array("baidu" => "www.baidu.com",
			   "google" => "www.google.com",
			   "sohu" => "www.sohu.com");
echo "online Resources </b><br/>";
foreach($links as $title => $link) {
	echo "<a href=\"http//:$link\">$title</a><br/>";
}
