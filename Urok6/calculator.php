<html> 
 <head> 
  <title>Калькулятор</title> 
 </head> 
 <body> 
 <form action="calculator.php" method=get> 
   Введите х: <input type=text name=x><br/> 
   Введите у: <input type=text name=y><br/> <br/>
   Выберите действие: 
   <select name=action> 
    <option value="+">х+у</option> 
    <option value="-">х-у</option> 
    <option value="*">х*у</option> 
    <option value="/">х/у</option>  
   </select><br/> <br/>
   <input type=submit value="Вычислить"> 
  </form> 

 <?php
 
  $a=$_GET['action']; 
  $x=$_GET['x']; 
  $y=$_GET['y']; 
  $result=0; 
  if (isset($_GET['action'])) {
	$a=$_GET['action'];
} else {
	$a="";
};
if (isset($_GET['x'])){
	$x=(float)$_GET['x']; 
} else {
	$x=0;
};

if (isset($_GET['y'])){
	$y=(float)$_GET['y']; 
} else {
	$y=0;
};
if ($a!="") {
  switch ($a) {
	case "+": $result = $x + $y; break;
	case "-": $result = $x - $y; break;
	case "*": $result = $x * $y; break;
	case "/": if ($y != 0) {
			$result = $x / $y;
		} else { 
			$result = "деление на ноль";
		};
		break;
	default: $result = "Неизвестное действие";
}
}
echo "$x "."$a "."$y "." = ".$result;
 ?> 

 </body> 
</html>