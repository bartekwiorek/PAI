<?php 
$x=6;
$y=7;
echo("Tabliczka mnożenia<br><hr>");
echo("<table border=1>");
for($j=1;$j<=$x;$j++){
    echo("<tr>");
    for($i=1;$i<=$y;$i++){
        $w=$i*$j;
        echo("$j * $i = $w <br>");
        echo("<td>$w</td>");
    }
    echo("</tr>");
}
echo("</table>");
?>