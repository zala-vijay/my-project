<?php

	$n1 = 5;
	$n2 = 10;
	$n3 = 15;
	
	if($n1 > $n2 && $n1 > $n3)
	{
		echo $n1."  is large";
	}
	elseif($n2 > $n1 && $n2 > $n3)
	{
		echo $n2."  is large";
	}
	else
	{
		echo $n3."  is large";
	}
	
?>