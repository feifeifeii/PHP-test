<?php
	define("PI","3.1415926",1);//設定拍的值
	echo PI."<br>";
	echo Pi."<br>";
	echo pi."<br>";
	$Pi_1 = "3.1415926"."<br>";
	echo $Pi_1;
	
	if(defined ("PI")){
		echo " PI 已被設定 "."<br>";
	}else{
		echo "未設定";
	}

	$Pi_1 = "";//使用符號自訂
	echo $Pi_1;
	
	if($Pi_1 !=''){
		echo " Pi 有值 ";
	}else{
		echo " Pi 沒有值 ";
	}
?>