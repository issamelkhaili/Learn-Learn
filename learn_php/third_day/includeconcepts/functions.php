<?php

function printhello()
{
	echo "Hello";
}

function sum($num1,$num2)
{
	echo $num1 + $num2;
}

function printmanytimes($whattosay,$howmanytime)
{
	while($howmanytime > 0)
	{
		echo $whattosay;
		$howmanytime--;
	}
}
?>
