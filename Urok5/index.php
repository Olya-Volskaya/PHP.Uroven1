<h1 align="center"> Галерея - Котики </h1>
<?php

include "config.php";

$sql = "SELECT path FROM images";
$res = mysqli_query($connect, $sql);


while($link = mysqli_fetch_assoc($res)) {
	echo '<a href='.$link[path].' target="_blank"><img src='.$link[path].' width = "200px"> </a>';
}
?>


	

