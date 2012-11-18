<?php
$string = 'La pasta é il piatto piú amato in Italia';

$translate = get_html_translation_table(HTML_ENTITIES);
echo strtr($string, $translate);
echo '<p>';

$table = array(
	'<b>' => '<strong>',
	'</b>' => '</strong>',
);

$chars = array(
	'o' => '1',
	'e' => '2',
	'b' => 'mark',
);

$html = '<b>Today In  PHP-Powered News</b>';
echo strtr($html,$table);
echo '<p>';
echo strtr($html, $chars);
echo '<p>';


$text = '<p>Test paragraph.</p><!-- Comment --><a href="#fragment">Other text</a>';
echo strip_tags($text);
echo '<p>';
echo strip_tags($text, '<p><a>');
