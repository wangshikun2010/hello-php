<?php
$oldname = '10-16.php';
$newname = '10-161.php';

if (rename($oldname, $newname)) {
	echo '成功将'.$oldname.'改为'.$newname.'<p>';
}

if (rename($newname, $oldname)) {
	echo '成功将'.$newname.'改为'.$oldname.'<p>';
}