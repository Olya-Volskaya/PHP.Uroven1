<html>
 <head>
  <title>Калькулятор</title>
 </head>
 <body>
  <form method="POST" action=''>
   Первое число<input type="text" name="a"><br/>
    Второе число<input type="text" name="b"><br/>
   <input type="radio" name="operation" checked value='+'>+ <br/>
   <input type="radio" name="operation" value='-'>-<br/>
   <input type="radio" name="operation" value='*'>*<br/>
   <input type="radio" name="operation" value='/'>/  <br/> <br/>
   <input type='submit' name='vichislit' value='Вычислить'> 
   <input type="reset" name='ochistit' value='Отменить'>  
   </form> 
<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $radio=$_POST['operation'];
  if ($_POST['vichislit'])
  {
      if ($radio=='+'){$c = $a + $b; echo "сумма = " . $c.'<br>';}
      if ($radio=='-'){$d = $a - $b; echo "разность = " . $d.'<br>';}
      if ($radio=='*'){$e = $a *$b;  echo  "произведение = " . $e.'<br>';}
      if ($radio=='/'){
      if($b == '0'){echo "деление на ноль";
      }else{
      $f = $a / $b; echo "деление = " . $f;
      }}
}
?>  
 </body>
</html>