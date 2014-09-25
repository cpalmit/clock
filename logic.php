<?php 
date_default_timezone_set("America/New_York");
$timezone = date("e");
$time = date("h:i a");
$hour = date("G");

if (($hour >= 5)&&($hour<11)){
	$timeofday="morning";
} else if (($hour >= 11)&&($hour<16)){
	$timeofday="afternoon";
} else if (($hour >= 16)&&($hour<20)){
	$timeofday="evening";
} else if(($hour >= 20)||($hour<5)){
	$timeofday="night";
}
?>