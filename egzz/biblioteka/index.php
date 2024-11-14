<!DOCTYPE html>
<html lang="pl-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka Publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id='gorny'>
    <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
</div>

<div id='lewy'>
    <h2>Dodaj czytelnika</h2>
    <form action="" method="post" name='formularz'>
        imie: <input type="text" name='imie'><br>
        nazwisko: <input type="text" name='nazwisko'><br>
        rok urodzenia: <input type="number" name='rok'><br>
        <input type="submit" value='Dodaj'>
    </form>
    <?php
            $imie = '';
            $nazwisko = '';
            $rok = '';

            if(isset($_POST['imie'])) 
            {$imie=htmlspecialchars(trim($_POST['imie']));}

            if(isset($_POST['nazwisko'])) 
            {$nazwisko=htmlspecialchars(trim($_POST['nazwisko']));}

            if(isset($_POST['rok'])) 
            {$rok=htmlspecialchars(trim($_POST['rok']));}

            $kod = substr($imie,0,2).substr($rok,0,-2).substr($nazwisko,0,2);




    ?>
</div>

<div id='srodek'>
    <img src="biblioteka.png" alt="biblioteka">
    <h4>ul. Czytelnicza 25<br> 12-120 Książkowice<br> tel.: 123123123<br> <a href= "mailto: biuro@bib.pl"> biuro@bib.pl </a></h4>
    
</div>

<div id='prawy'>
    <h3>Nasi czytelnicy:</h3>
    <ul>
<?php
  $id = mysqli_connect("127.0.0.1","root","","biblioteka");
    $sql = "SELECT imie, nazwisko FROM czytelnicy;";
    $result=mysqli_query($id,$sql);

    while($row=mysqli_fetch_array($result))
    {
      echo"
        <li>$row[imie] $row[nazwisko]</li>
        ";
    };

  mysqli_close($id);
?>
</ul>
</div>

<footer>
Projekt witryny: 127381263767
</footer>
    
</body>
</html>