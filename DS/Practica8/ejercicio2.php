<?php
    $CANT=$_GET['cant'];
    $reversed=array();
    $SINOR=array();
    
    echo "SINOR original:<br>";
    for($i=1;$i<=$CANT;$i++){
        $SINOR[$i]=rand(0,100);
        echo "Posición $i: $SINOR[$i] <br>";
    }
    
    echo "<br> SINOR simétrico: <br>";
    
    $reversed= array_reverse($SINOR);
    for($i=0;$i<$CANT;$i++){
    echo $reversed[$i] . "<br>";
    }

    echo "<br> SINOR ordenado de menor a mayor: <br>";

   $dup=array_merge($SINOR);
    
    sort($SINOR);
    
    for($i=0; $i<$CANT;$i++){
        echo "Pos $i: $SINOR[$i] - Antes la ocupaba: $dup[$i]  <br>";
    }



?>