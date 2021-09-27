<?php
$n=$_GET["numero"];
$result="<table style='text-align:center'>"; 
$result.="<tr>";
    $result.=str_repeat("<td/>", $n);
    $result.="<td>1</td>";
$result.="</tr>";
for ($columna=$n-1; $columna>0; $columna--) {
    $result.="<tr>";
        $result.=str_repeat("<td></td>", $columna);
        foreach (array_merge(range(1, $n-$columna+1), range($n-$columna, 1, -1)) as $fila) {
            $result.="<td>$fila</td>";
        }
        $result.="</tr>";
}
$result.="</table>";
echo $result;
?>
