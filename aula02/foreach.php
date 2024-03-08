<?php
   $pokemons = array (
    "Pikachu",
    "Bulba",
    "Charmander",
    "Squirtle",
    "Eevee"
   );

   foreach ($pokemons as $pokemon) {
      if ($pokemon !== "Charmander") {
        echo $pokemon. "<br>";
      }    
   }




?>