<?php
$p1= strtolower($_GET['palabra1']);
$p2=strtolower($_GET['palabra2']);
$count=0;



if(strlen($p1)==5 && strlen($p2)==5)
{
    for($i=0;$i<5;$i++)
    {
        if($p1[$i]==$p2[$i])
        {
            $count=$count+1;
        }
    }
    echo "Hay $count letras iguales";

}else{
    echo "Las palabras deben ser de 5 letras.";
}

?>