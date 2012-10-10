<?php
//fgetecsv()从文件指针读入一行并解析csv文件，函数返回包含指定字段隔开的一个数组

$row = 1;
$handle = fopen("./tmp/data.csv","r"); //将成csv文件用只读方式打开
print_r(fgetcsv($handle,1000,","));

while ($data = fgetcsv($handle, 1000, ",")) {
    $num = count($data); //数组长度

    echo "<p> 数组长度$num, 行数$row: <br>";
    $row++;

    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br>";
    }
    print_r($data);
}
fclose($handle);
?>