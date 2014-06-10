<?php

	$result=array(1,2,3,4,5);
	//print_r($result);
	$touzhu=array('1'=>array(1,2,3),'2'=>array(1,2,3));
	//print_r($touzhu[1]);
	
	
	//define("GREETING","Hello world!");
	
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
	
	//echo $GROUP_SELECT3;
	function prin($touzhu)
	{
		foreach($touzhu as $key=>$value )
		{
			foreach($value as $v2)
			{
				echo $key.$v2;
			}
		}
	}
	
	//prin($touzhu);
	
	//是否要返回奖金
	//依赖的临时变量 要清零 会影响下一次的结果
	function rule2($result,$touzhu,$type)
	{
		$grade=0;
		switch($type)
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
		}
		
		
		
		
		
		
		
		
		
		$last=0;
	    $temp=0;
		$ty=$type;
	    if($ty>=5)
		{
			$ty=5;
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

	
	
	
	
	
	
	
	
	//根据累计截取投注
	function rule777($result,$touzhu,$type)
	{
	    if($type==1){
			$result=array($result[0]);
		}elseif($type==2){
			$result=array($result[0],$result[1]);
		}elseif($type==3){
			$result=array($result[0],$result[1],$result[2]);
		}
		
	    $temp=0;
		$last=0;
		foreach($touzhu as $key=>$value )
		{
			foreach($value as $v2)
			{
				if(in_array($v2,$result))
				{
				  $temp++;
				}
			}
			if($temp==$type)
			{
				$last++;
			}
			$temp=0;
		}
		
		return $last;
	
	}
	
	
	
	//依赖的临时变量 要清零 会影响下一次的结果
	function rule2($result,$touzhu,$type,$extra=0,$link=0)
	{
	
	
	
	
	
	
	
		$grade=0;
		switch($type+$extra)
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
		default:
			die("erro");
			break;	
		}
		
		if($extra==10)
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
	
	
	
	
	
	
	
	



?>