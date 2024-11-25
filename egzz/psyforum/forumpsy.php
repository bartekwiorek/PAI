<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id=header>Forum miłośników psów</section>
    <section id=glowny>
        <section id=lewy>
            <img src="avatar.png">
<?php
    $con = mysqli_connect('localhost', 'root', '','forumpsy');
    $zapytanie = "Select konta.nick, konta.postow, pytania.pytanie FROM konta, pytania where konta.id = pytania.konta_id and pytania.id = 1";
    $result = mysqli_query($con, $zapytanie);
    while($row = mysqli_fetch_array($result)) {
        echo "<h4>Użytkownik: $row[nick]</h4>
            <p>$row[postow] postów na forum</p>
            <p>$row[pytanie]</p>";
    }
?>
			<video src="video.mp4" controls loop></video>
        </section>

        <section id=prawy>
            <form>
                <textarea name="odp" rows="4" cols="40"></textarea>
                <button>Dodaj odpowiedź</button>
            </form>
<?php
    if(!empty($_POST['odp'])){
        $odp = $_POST['odp'];
        $zapytanie = "insert into odpowiedzi values (NULL,1,5,'$odp');";
        mysqli_query($con, $zapytanie);
    }
?>
            <h2>Odpowiedzi na pytanie</h2>
            <ol>
<?php
	$q = "SELECT odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi, konta WHERE odpowiedzi.konta_id = konta.id AND odpowiedzi.Pytania_id = 1;";
	$res = mysqli_query($con, $q);
	while($row = mysqli_fetch_array($res)) {
		echo "<li>$row[0] $row[1]</li><hr>";
	}
    mysqli_close($con);
?>
            </ol>
        </section>
    </section>

    <section id="stopka">
        Autor: 21i3123123 <a href="http://mojestrony.pl/" blank_>Zobacz nasze realizacje</a>
    </section>
</body>
</html>