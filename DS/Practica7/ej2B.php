<?php
//Recorre VALOR 1 vez.
$n=round($_GET['valor']);
$max=0;
if($n<40){
   for($i=0;$i<$n;$i++){
       $VALOR[$i]=rand(0,100);
       echo $VALOR[$i]."<br>";
       if($VALOR[$i]>=$max){
           $max=$VALOR[$i];
           echo "El máximo $max, está en la posicion $i <br>";
       }
   }

}else{
    echo "Debe ser menor a 40";
}
?>