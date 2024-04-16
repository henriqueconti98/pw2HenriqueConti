<?php
$num1 = 0;
$num2 = 1;

echo "Sequência Fibonacci com for loop: ";

for($i = 0; $i < 10; $i++) {
    echo $num1 . ", ";
    $proxNum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $proxNum;
}
?>

<?php
$num1 = 0;
$num2 = 1;
$contador = 0;

echo "Sequência Fibonacci com while loop: ";

while($contador < 10) {
    echo $num1 . ", ";
    $proxNum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $proxNum;
    $contador++;
}
?>
