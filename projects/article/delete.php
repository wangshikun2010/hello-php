<?php
require 'functions.php';

function detele_link() {
	$links = read_data();

	foreach ($links as $key => $link) {
		unset($link);
	}

	return $links;
}

