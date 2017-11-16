<?php 

$test_string = "hello";
echo preg_match('/hello/', $test_string);

$test_string = "abchelloabc";
echo preg_match('/hello/', $test_string);

$test_string = "abchelloabc";
echo preg_match('#hello#', $test_string);

$test_string = "hell";
echo preg_match('/hello/', $test_string);

$test_string = "hellO";
echo preg_match('/hello/', $test_string);

$test_string = "hellO";
echo preg_match('/hello/i', $test_string);

$test_string = "abchelloabc";
echo preg_match('/^hello/', $test_string);

$test_string = "abc12223abc";
echo preg_match('/123/', $test_string);
echo preg_match('/12+3/', $test_string);
echo preg_match('/12{3}3/', $test_string);

$test_string = "0102030450";
echo preg_match('/([0-9]{10})/', $test_string);
$test_string = "01-02-03-04-50";
echo preg_match('/([0-9]{2}(-|.))([0-9]{2})/', $test_string);
$test_string = "01-02-0304.50";
echo preg_match('/([0-9]{2}(-|.))([0-9]{2})/', $test_string);

// * + 

?>