<?php
//计算距离的函数
define("earthradius",6371004.1);//单位为米
function distance($LonA,$LatA,$LonB,$LatB){
	 $LatA =  $LatA* pi()/180; //角度->弧度
     $LonA = $LonA* pi()/180; 
     $LatB = $LatB* pi()/180; 
     $LonB = $LonB* pi()/180; 
	 
	 $calcLon = $LonB - $LonA; 
     $calcLat = $LatB - $LatA; 
	 $sOne = pow(sin($calcLat / 2), 2) + cos($LatA) * cos($LatB) * pow(sin($calcLon / 2), 2); //类似球面上两点距离公式
	 $sTwo = 2 * asin( sqrt($sOne) ); 
     $Distance = earthradius* $sTwo; 
	 return $Distance;
	 
 }
 ?>