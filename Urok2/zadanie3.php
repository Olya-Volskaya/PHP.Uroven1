<?php
$x = rand (-100, 100);
echo "переменная x = ". $x. "<br>";
$y = rand (-100, 100);
echo "переменная y = ". $y. "<br>";
function slozhenie($x,$y) {
	return $x + $y;
}
echo slozhenie($x,$y). " сумма двух переменных <br>";

function minus($x,$y) {
	return $x - $y;
}
echo minus($x,$y). " разность двух переменных <br>";

function umnozhenie($x,$y) {
	return $x * $y;
}
echo umnozhenie($x,$y). " произведение двух переменных <br>";

function delenie($x,$y) {
	return $x /$y;
}
echo delenie($x,$y). " частное двух переменных <br>";


?>