
<?php
echo "Привет, МИР!";
echo "<br>";
echo "<br>";
?>

<?php
$name="Оля";
echo "Привет, $name!";
echo "<br>";
echo "<br>";
?>


<?php
define('MY_CONST', 100);

echo MY_CONST;
echo "<br>";
echo "<br>";
?>


<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
echo "<br>";
echo "<br>";
?>


<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
echo "<br>";
echo "<br>";
?>


<?php
$a = 1;
echo "$a";
echo "<br>";
echo '$a';
echo "<br>";
echo "<br>";
?>



<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
echo "<br>";
echo "<br>";
?>


<?php
$a = 4;
$b = 5;
echo "сложение $a + $b <br>";    // сложение
echo "умножение $a * $b <br>";    // умножение
echo "вычитание $a -­ $b <br>";    // вычитание
echo "деление $a / $b <br>";  // деление
echo "остаток от деления $a % $b <br>"; // остаток от деления
echo "возведение в степень $a ** $b <br>"; // возведение в степень
echo "<br>";
?>


<?php
$a = 4;
$b = 5;
$a += $b;
echo "'a = ' . $a";
echo "<br>";
$a = 0;
echo $a++;     // Постинкремент
echo "<br>";
echo ++$a;    // Преинкремент
echo "<br>";
echo $a­­--;     // Постдекремент
echo "<br>";
echo --$a;    // Предекремент
echo "<br>";
echo "<br>";
?>


<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
echo "<br>";
var_dump($a === $b); // Сравнение по значению и типу
echo "<br>";
var_dump($a > $b);    // Больше
echo "<br>";
var_dump($a < $b);    // Меньше
echo "<br>";
var_dump($a <> $b);  // Не равно
echo "<br>";
var_dump($a != $b);   // Не равно
echo "<br>";
var_dump($a !== $b); // Не равно без приведения типов
echo "<br>";
var_dump($a <= $b);  // Меньше или равно
echo "<br>";
var_dump($a >= $b);  // Больше или равно
echo "<br>";
echo "<br>";
?>



 
 

