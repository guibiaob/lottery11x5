<?php

     define("RAND_SELECT2",6);
	 define("RAND_SELECT3",19);
	 define("RAND_SELECT4",78);
	 define("RAND_SELECT5",540);
	 define("RAND_SELECT6",90);
	 define("RAND_SELECT7",26);
	 define("RAND_SELECT8",9);
	 define("LINE_SELECT1",11);
	 define("LINE_SELECT2",130);
	 define("LINE_SELECT3",1170);
	 define("GROUP_SELECT2",65);
	 define("GROUP_SELECT3",195);
	
    $result=array(1,2,3,4,5);
	//$touzhu=array('1'=>array(1,2,3),'2'=>array(1,2,3));
    $touzhu=array('1'=>array(1,2,3),'2'=>array(1,2,4));
	
	echo rule3($result,$touzhu,3,0,20);
	
	
	//依赖的临时变量 要清零 会影响下一次的结果
	function rule3($result,$touzhu,$type,$extra=0,$link=0)
	{
	
	//echo $link;
	//die("ee");
	
	
		$grade=0;
		switch($type+$extra+$link)
		{
		case 2:
			$grade=RAND_SELECT2;
			break;
		case 3:
			$grade=RAND_SELECT3;
			break;
		case 4:
			$grade=RAND_SELECT4;
		break;
			case 5:
			$grade=RAND_SELECT5;
		break;
			case 6:
			$grade=RAND_SELECT6;
			break;
		case 7:
			$grade=RAND_SELECT7;
			break;
		case 8:
			$grade=RAND_SELECT8;
			break;
		case 11:
			$grade=LINE_SELECT1;
			break;
		case 12:
			$grade=GROUP_SELECT2;
			break;
		case 13:
			$grade=GROUP_SELECT3;
			break;
		case 22:
			$grade=LINE_SELECT2;
			break;
			
		case 23:
			$grade=LINE_SELECT3;
			break;
			
		default:
			die("erro");
			break;	
		}
		
		//echo "进入$extra 进入$link";
		
		
		if($extra==10||$link==20)
		{
		
		
			if($type==1){
				$result=array($result[0]);
		}elseif($type==2){
				$result=array($result[0],$result[1]);
		}elseif($type==3){
				$result=array($result[0],$result[1],$result[2]);
		}
		}
		
		$last=0;
	    $temp=0;
		$ty=$type;
	    if($ty>=5)
		{
			$ty=5;
		}
		
		if($link==20)
		{
		
		$last=0;
	    $temp=0;
		
		foreach($touzhu as $key=>$value )
		{
			foreach($value as $k2=>$v2)
			{
				if($result[$k2]==$v2)
				{
				  $temp++;
				}
			}
			
			
			if($temp==$ty)
			{
				$last++;
			}
			$temp=0;
		}
		
		
		return $last*$grade;
		
		}
		
		
		
		
		
		foreach($touzhu as $key=>$value )
		{
			foreach($value as $v2)
			{
				if(in_array($v2,$result))
				{
				  $temp++;
				}
			}
			if($temp==$ty)//
			{
				$last++;
			}
			$temp=0;
		}
		
		return $last*$grade;
	
	}
	
	
	
	
	
	
	
	
	
	
	
	//echo rule2($result,$touzhu,3);
	
	


?>