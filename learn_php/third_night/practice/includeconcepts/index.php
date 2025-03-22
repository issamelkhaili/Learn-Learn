<?php
$today = date("l");
if($today != "Sunday")
	include "happy.html";
else
	include "sad.html";
echo "Today is $today";
?>

