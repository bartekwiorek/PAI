<?php
$a = "";
$b = "";
$wynik = "";

if (isset($_POST['a'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $wynik = $a * $b;
}
echo"
<form name='dane' action='' method='post'>
        <input type='select' name='a' min='0' max='100' value = '$a'> x
        <input type='select' name='b' min='0' max='100'value = '$b'> = $wynik
        <input type='SUBMIT' name='zatwierdz' value = 'OK'>
</form>";
echo"<table border=1>";

for($i=1;$i<=$a;$i++) {
    echo"<tr><td>$i</td>";
for($j=2;$j<=$b;$j++) {
    $c=$i*$j;
	echo"<td>$c</TD>";
    }	   
    echo"</TR>";
    }
echo"</TABLE>";


?>
