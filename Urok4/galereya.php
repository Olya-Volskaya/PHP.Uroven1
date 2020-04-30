<h1 align="center"> Моя галерея - Котики </h1>

<?php
$dir1 = "images/small";
$dir2 = "images/big";
//print_r($files);

$files = scandir($dir1);
?>

<?php 
for($i = 2; $i < count($files); $i++) : ?>
     <a href="<?= $dir2."/".$files[$i] ?>" target="_blank"> 
	 <img src="<?= $dir1."/".$files[$i] ?>">
	 </a> 

<?php endfor; ?>