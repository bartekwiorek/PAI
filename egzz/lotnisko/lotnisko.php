<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Port Lotniczy</title>
	<link rel="stylesheet" href="style5.css" />
</head>
<body>
	<div id="baner1">
		<img src="zad5.png" alt="logo lotnisko" />
	</div>
	<div id="baner2">
		<h1>Przyloty</h1>
	</div>
	<div id="baner3">
		<h3>przydatne linki</h3>
		<a href="kwerendy.txt">Pobierz...</a>
	</div>
	<div id="glowny">
		<table>
			<tr>
				<th>czas</th>
				<th>kierunek</th>
				<th>numer rejsu</th>
				<th>status</th>
			</tr>
        <?php
			$id = mysqli_connect('localhost', 'root', '', 'egzamin');
			$kw = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
			$result = mysqli_query($id, $kw);
			while($tab = mysqli_fetch_row($result)) {
				echo"<tr>
                        <td>$tab[0]</td>
                        <td>$tab[1]</td>
                        <td>$tab[2]</td>
                        <td>$tab[3]</td>
                    </tr>";
			}
			mysqli_close($id);
		?>	
		</table>
	</div>
	<div id="stopka1">
        <?php
            
        ?>
	</div>
	<div id="stopka2">
		Pesel: adasda231 
    </div>
</body>
</html>