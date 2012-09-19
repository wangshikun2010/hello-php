<?php
echo "<b>\$_SERVER</b><br/>";
echo "<b>用户到达当前页面的URL: </b>".$_SERVER['HTTP_REFERER']."<br/>";
echo "<b>客户的IP地址: </b>".$_SERVER['REMOTE_ADDR']."<br/>";
echo "<b>URL的路径: </b>".$_SERVER['REQUEST_URI']."<br/>";
echo "<b>浏览器的信息: </b>".$_SERVER['HTTP_USER_AGENT']."<br/>";
