<?php

$str="1,2";

$str=explode(",",$str);

//print_r($str);


$str="����һ��ƻ������һ��ƻ������һ��ƻ������һ��ƻ������һ��ƻ������һ��ƻ��";

$str=str_split($str,strlen($str)/10);

print_r($str);






?>