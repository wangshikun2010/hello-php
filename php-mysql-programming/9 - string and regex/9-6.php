<?php
//preg_grep()

$foods = array('pasta','steak','fish','potatoes');

$food = preg_grep('/^p/', $foods);
var_dump($food);

$no_food = preg_grep('/^p/', $foods, PREG_GREP_INVERT);
var_dump($no_food);

//preg_match()

$line = 'wang shi kun';
if(preg_match('/\bwang\b/i', $line)) {
	echo 'match found';
}

//preg_match_all()
$list = 'ThiS is la ji';
echo '<p>';
echo preg_match_all('/S/i', $list, $array, PREG_PATTERN_ORDER);
var_dump($array);
var_dump($array[0]);

$userinfo = 'Name <b>wang shi kun</b> <br/> age <b>20</b>';
preg_match_all('/<b>(.*)<\/b>/U', $userinfo, $array1, PREG_SET_ORDER);
var_dump($array1);

//preg_quote()
$text = '1223 $ ^eg/g';
echo preg_quote($text,'/');
echo '<p>';

$text = 'http://www.baidu.com';
echo preg_replace('/http:\/\/(.*)\//', '<a href=\'\${0}\'>\${0}</a>',$text);

// $case1 = array('a', 'b', 'c', 'd', 'e', 'f', 'g');
// $case2 = array('b', 'e', 'f');
// $case3 = array('20', '30', '50');
// echo preg_replace($case2, $case3, $case1);

//preg_replace_callback()
function acronym($matches) {
	$acronyms = array(
		'a' => 'and',
		'b' => 'border',
		'c' => 'css',
	);

	if(isset($acronyms[$matches[1]])) {
		return $matches[1].'('.$acronyms[$matches[1]].')';
	} else {
		return $matches[1];
	}
}

//preg_split()
$text = 'The <acronym>a</acronym> and <acronym>b</acronym> and <acronym>c</acronym>';
$newtext = preg_replace_callback('/<acronym>(.*)<\/acronym>/U', 'acronym', $text);

var_dump($newtext);

$text = 'aaa+bbbdfff+++++dfdfa++++=fasdf';
$fildes = preg_split('/\+{1,}/', $text);
var_dump($fildes);
