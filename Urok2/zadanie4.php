<?php
$arg1 = 8;
$arg2 = -2;
$operation = "-";

switch ($operation) {
	case "+":
	     function mathOperation($arg1,$arg2,$operation) {
		 return $arg1 + $arg2;
		 }

    echo mathOperation($arg1,$arg2,$operation). " сумма двух переменных <br>";
    break;

    case "-":
         function mathOperation($arg1,$arg2,$operation) {
	     return $arg1 - $arg2;
		 }

    echo mathOperation($arg1,$arg2,$operation). " разность двух переменных <br>";
    break;

    case "*":
	     function mathOperation($arg1,$arg2,$operation) {
	     return $arg1 * $arg2;
		 }

    echo mathOperation($arg1,$arg2,$operation). " произведение двух переменных <br>";
    break;

    case "/":
	     function mathOperation($arg1,$arg2,$operation) {
	      return $arg1 /$arg2;
		 }

    echo mathOperation($arg1,$arg2,$operation). " частное двух переменных <br>";
    break;
}

?>