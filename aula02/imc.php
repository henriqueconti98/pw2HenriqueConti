<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php
$peso = 100;
$altura = 1.79;
$nome = "Conti";

$imc = $peso/($altura * 2);

switch ($imc) {
  case $imc>=35:
    echo "Obesidade grau 2";
    break;
  case $imc>=30:
    echo "Obesidade";
    break;
  case $imc>=25:
    echo "Acima do peso";
    break;
  case $imc>=18.5:
    echo "Peso normal";
    break;
  case $imc>=17:
    echo "Abaixo do peso";
    break;
}
   
?>
    </body>
</html>