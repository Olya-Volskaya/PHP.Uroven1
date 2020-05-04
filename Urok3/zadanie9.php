<?php
//функция не доработана

$str = "Объединить две ранее написанные функции в одну";

function zamena($str) { 
$translit = [
          "а"=>"a",  "б"=>"b", "в"=>"v",
		  "г"=>"g",  "д"=>"d", "е"=>"e",
          "ё"=>"yo", "ж"=>"zh", "з"=>"z",
		  "и"=>"i", "й"=>"j", "к"=>"k",
		  "л"=>"l", "м"=>"m", "н"=>"n",
		  "о"=>"o",  "п"=>"p", "р"=>"r",
		  "с"=>"s", "т"=>"t", "у"=>"u",
		  "ф"=>"f", "х"=>"h", "ц"=>"c",
		  "ч"=>"ch", "ш"=>"sh", "щ"=>"sch",
		  "ъ"=>"\'", "ы"=>"y", "ь"=>"'",
		  "э"=>"ye", "ю"=>"yu", "я"=>"ya"];
		  
	 $stringArr = str_split($str); 
	 
	 for ($i = 0; $i < count($stringArr); $i++) {
		 foreach ($translit as $key => $value) {
			 if ($stringArr[$i] == $key) { 
			 $requestedArr[] = $value;
			 break;
			 }
		 }
	 }
	     	 
	 return str_replace(" ", "_", $requestedArr);
 };

echo zamena($str);

?>