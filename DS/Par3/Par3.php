<?php
$n=$_GET["numero"];

function esCapicua($n){
$alreves = strrev($n);
 if($n==$alreves)
 {
  $value="Es capicua";
 }else
 {
  $value="No es capicua";
 };
return $value;
}
echo esCapicua($n). "<br>";

function esPrimo($n)
{
    if ($n == 2 || $n == 3 || $n == 5 || $n == 7) {
        return True;
    } else {
        
        if ($n % 2 != 0) {
           
            for ($i = 3; $i <= sqrt($n); $i += 2) {
                if ($n % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
}
if (esPrimo($n)) {
  echo "<br>El número ".$n." es primo". "<br>";
} else {
  echo "<br>El número ".$n." NO es primo". "<br>";
}

function siguientePrimo($n){
  $i=$n+1;
  if(esPrimo($i)==true){
    return $i;
  } else{
    while (esPrimo($i)==false){
      $i+=1;
      esPrimo($i);
    }
  }
  return $i;
  }
echo siguientePrimo($n). "<br>";


$b=$_GET["base"];
$e=$_GET["exp"];

//POTENCIA
echo pow($b,$e). "<br>";

//DIGITOS
echo strlen($n). "<br>";

$posN=$_GET["n"];

///DIGITO N 
echo substr($n,$posN,1). "<br>";

function posicionDeDigito($n,$posN){
  $digito=strpos($n,$posN);
  if($digito==false){
    $digito="-1";
  }
  return $digito;
}
echo posicionDeDigito($n,$posN). "<br>";

function quitaPorDelante($n,$posN){
  $digito=substr($n,$posN);
  return $digito;
}
echo quitaPorDelante($n,$posN). "<br>";

function quitaPorDetras($n,$posN){
  $digito=substr_replace($n,'',-$posN);
  return $digito;
}
echo quitaPorDetras($n,$posN). "<br>";

function pegaPorDetras($n,$posN){
  $digito=$n . $posN;
  return $digito;
}
pegaPorDetras($n,$posN). "<br>";

function pegaPorDelante($n,$posN){
  $digito=$posN . $n;
  return $digito;
}
echo pegaPorDelante($n,$posN). "<br>";

$f=$_GET["f"];

function trozoDeNumero($n,$posN,$f){
  $n=substr($n,$posN,$f);
  return $n;
}
echo trozoDeNumero($n,$posN,$f). "<br>";

function juntaNumeros($n,$posN){
  $digito=$n . $posN;
  return $digito;
}
echo juntaNumeros($n,$posN). "<br>";


?>

