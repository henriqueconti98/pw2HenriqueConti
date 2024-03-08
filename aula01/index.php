<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $peso = 78;
    $altura = 1.79;
    $nome = "Henrique Conti";


    $imc = $peso/($altura * $altura);

    echo "Bem vindo " . $nome . "<br>" . " seu imc é igual a:  " . $imc . "<br>";

    if($imc>=35){
        echo "Obesidade 2";
    }

    else if($imc>=30){
        echo "Obesidade 1";
    }

    else if($imc>=25){
        echo "Acima do peso";
    }

    else if($imc>=18.5){
        echo "Peso normal";
    }

    else{
        echo "Abaixo do peso";
    }

     

   ?>



</body>
</html>