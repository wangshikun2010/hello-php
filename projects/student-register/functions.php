<?php

define('DS', DIRECTORY_SEPARATOR);
define('DATA_FILE', __DIR__ . DS . 'data.csv');

/**
 * 向DATA_FILE中写1条数据, 要求学号不能重复
 * @param  array $student 1条学生信息
 * @return bool       是否写入成功
 */
function write_data($newstudent) {
	// 1. 先读取DATA_FILE中的所有学生信息
	$students = read_data();

	// 2. 将用户提交的$student合并到$students,$student是一个学生信息,$students是所有学生信息

	$not_find = false;
	foreach ($students as $key => &$student) {

		if ($student['student_id'] === $newstudent['student_id']) {
			$not_find = true;
			$student = array_merge($student,$newstudent);
			break;
		}
	}
	if($not_find === false) {
		array_push($students,$newstudent);
	}

	// 3. 将合并后的信息重新写入文件
	$handle = fopen(DATA_FILE, 'w+');
	foreach ($students as $key => $student) {
		fputcsv($handle, $student);
	}
	fclose($handle);

	return $students;
}

/**
 * 将所有的记录读出来或者只读取某个学生的信息
 * @param int $student_id 要读取的学生ID,不指定的话读取所有学生
 * @return array 多条记录的多维数组
 */
function read_data($student_id = null) {
	$keys = array(
		'name',
		'student_id',
		'age',
		'gender',
		'height',
		'school',
		'college',
		'specialty',
		'grade',
		'class',
		'hometown',
		'id_number',
		'political_landscape',
		'hobby',
		'phone',
		'mailbox',
		'address',
	);

	$students = array();

	if (!file_exists(DATA_FILE)) {
		return $student_id === null ? $students : null;
	}

	$handle = fopen(DATA_FILE, 'r');
	while (($values = fgetcsv($handle, 4096, ",")) !== false) {
		$students[] = array_combine($keys, $values);
	}
	fclose($handle);

	// 如果读取的是某个学生的信息
	if ($student_id !== null) {
		foreach ($students as $key => $student) {
			if ($student['student_id'] == $student_id) {
				return $student;
			}
		}
		return null;
	}

	return $students;
}

/**
 * Debug
 * @param  mixed $data
 * @return void
 */
function debug($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
