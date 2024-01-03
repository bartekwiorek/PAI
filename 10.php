<?php
$a = "";
$b = "";
$suma = "";

if (isset($_POST['a'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $suma = $a + $b;
}
echo "
<form name='dane' action='' method='post'>
        <input type='a' name='a' min='0' max='100' value = '$a'> +
        <input type='b' name='b' min='0' max='100'value = '$b'> = $suma
        <input type='SUBMIT' name='zatwierdz' value = 'OK'>
</form>";
?>
