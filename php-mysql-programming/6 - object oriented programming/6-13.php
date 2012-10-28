<?php
interface Shop {
	public function buy($gid);
	public function sell($gid);
	public function view($gid);
}

if(interface_exists('Shop')) {
	echo 'Shop接口存在';
}
