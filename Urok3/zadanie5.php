<?php

$string = "Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку";

function zamena($string) {
	
$str = str_replace(" ", "_", $string);
return $str;
}
echo zamena($string);
?>