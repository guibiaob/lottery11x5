<?php

//���11ѡ5�ķ���
function add()
{
	$xx=array();
	while(count($xx)!=5)
   {
		$s=rand(1,11);
		if(!in_array($s,$xx))
			{
				array_push($xx,$s);
             }
			}
		return $xx;

}

for($j=0;$j<84;$j++){
       print_r(add());
	   echo "<br>";
}
   






?>