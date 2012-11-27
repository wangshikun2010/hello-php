<?php
passthru('dir');

echo shell_exec('dir');

$output = shell_exec('date');
echo '<p>'.$output.'<p>';

echo `date`;
