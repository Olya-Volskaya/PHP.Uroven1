<?php

include "config.php";

$digits = 4; //Определяет кол-во показываемых чисел – в этом случае 000x.

$filelocation="clicks.txt"; //Имя файла счетчика.

if (!file_exists($filelocation)) {
$newfile = fopen($filelocation,"w+");
$content=1;
fwrite($newfile, $content);
fclose($newfile);

}
$newfile = fopen($filelocation,"r");
$content = fread($newfile, filesize($filelocation));
fclose($newfile);
$newfile = fopen($filelocation,"w+");

if (!$c){
$content++;
}

fwrite($newfile, $content);
fclose($newfile);

echo "Количесто просмотров ".sprintf ("%0"."$digits"."d",$content)."";

//Если вы хотите, чтобы какой либо текст был вокруг счетчика, заключите строку выше в цитатные кавычки (quotation marks).

?>
