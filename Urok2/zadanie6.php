<?php
$val = 2;
$pow = 3;

function power($val,$pow) {
	if($pow==0) 
		return 1;
	
	else if ($pow <0) 
		return power(1/$val, -$pow);
	
	else 
return $val * power($val,$pow -1);
}

echo power($val,$pow);
?>