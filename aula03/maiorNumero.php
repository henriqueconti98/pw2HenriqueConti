<?php
$nums = [1, 22, 5, 4, 34, 122];
$maiorNum = 0;

      foreach ($nums as $num){

            echo $num, "<br>";
      
            if ($num > $maiorNum){
                  $maiorNum = $num;
            }
      }
      echo "O maior número é: $maiorNum";

?>