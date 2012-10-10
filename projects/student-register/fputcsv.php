<?php

//将行格式化为csv并写入指定的文件

$list = array (
    'aaa,bbb,ccc,dddd',
    '123,456,789',
    '"aaa","bbb"'
);

$fp = fopen('./tmp/data.csv', 'a');

foreach ($list as $line) {
    echo fputcsv($fp, explode(',', $line))."<br/>";
}

fclose($fp);
?>