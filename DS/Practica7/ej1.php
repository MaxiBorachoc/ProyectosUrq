<?php
$p1= strtolower($_GET['palabra1']);
$p2=strtolower($_GET['palabra2']);
$count=0;



if(strlen($p1)==5 && strlen($p2)==5)
{
    for($i=0;$i<5;$i++)
    {
        for ($j=0;$j<5;$j++){
            if($p1[$i]==$p2[$j]){
                $count++;
            }
        }
    }
    echo "Hay $count letras repetidas";
  

}else{
    echo "Las palabras deben ser de 5 letras.";
}

?>