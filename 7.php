<?php
echo"<TABLE border=1><tr>
    <td>Liczba</td>
    <td>Kwadrat</td>
    <td>Szescian</td>
    <td>Silnia</td></tr>";
    $Silnia=1;

    for($i=1;$i<=180;$i++) {
        echo"<tr>";
        $Kwadrat=$i*$i;
        $Szcescian=$i*$i*$i;
        $Silnia=$Silnia*$i;
        echo"<td>$i</td>";
        echo"<td>$Kwadrat</td>";
        echo"<td>$Szcescian</td>";
        echo"<td>$Silnia</td>";
    }
    echo"<tr>";
?>