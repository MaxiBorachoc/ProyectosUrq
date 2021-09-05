<?php
$N=$_GET["N"];
$factorial=0;
for($i=0;$i<=$N;$i++){
    for($k=1;$k<=$i;$k++){
        $factorial= $factorial*$k;
    }
    echo $factorial. "<br>";
    $factorial=1;
}
?>