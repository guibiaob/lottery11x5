<?php

$str="1,2";

$str=explode(",",$str);

//print_r($str);


$str="我是一个苹果我是一个苹果我是一个苹果我是一个苹果我是一个苹果我是一个苹果";

$str=str_split($str,strlen($str)/10);

print_r($str);






?>