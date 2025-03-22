<?php
$birth_date="2005/12/03";

$today_date=strtotime(date("Y/m/d"));
$birth_date=strtotime($birth_date);
$age = ((((($today_date-$birth_date) / 60) / 60) / 24) / 365.2425);
echo "The Date Today Is : " . Date("l,Mj,Y") . "\n";
echo "You Are $age Years Old \n";
echo "The Date After 10 Days will be : " . date("Y/d/m",$today_date+864000) . "\n";
function paorfu($string)
{
	global $today_date;
	$string=strtotime($string);
	if($string > $today_date)
		echo "Future";
	else if ($string == $today_date)
		echo "present";
	else if ($string < $today_date)
		echo "past";
	else
		echo "error";
}
paorfu("2055/12/03");
?>
