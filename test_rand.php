<?php

$xx=array();
while(count($xx)!=5)
{
$s=rand(1,11);
if(!in_array($s,$xx))
{
array_push($xx,$s);
}
}
print_r($xx);


//出入数据库








?>