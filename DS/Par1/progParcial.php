<?php
 $palabra = $_POST["palabra"];
 $alreves = strrev($palabra);
 echo $alreves . "<br>";
 if($palabra==$alreves)
 {
  echo "Es un palíndromo";
 }else
 {
  echo "No es un palíndromo";
 };
 
?>