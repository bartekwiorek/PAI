<?php
  $id=mysqli_connect("localhost","root","","iv_ti_1");
  
  if(isset($_POST['nazwa']))
  {
	  $nazwa=trim(htmlspecialchars($_POST['nazwa']));
	  $vat=(int) $_POST['vat'];
	  $jm=trim(htmlspecialchars($_POST['jm']));
	  $cena_netto=(float) $_POST['cena_netto'];
	  $grupa=(int) $_POST['grupa'];
	  $barcod=trim(htmlspecialchars($_POST['barcod']));
	  $stan=(float) $_POST['stan'];
	  $promocja=(float) $_POST['promocja'];
	  
	  $sql="INSERT INTO towary 
	        (nazwa, vat, jm, cena_netto, grupa,
			 barcod, stan, promocja)
			 VALUE
	        ('$nazwa', '$vat', '$jm', '$cena_netto', 
			  '$grupa', '$barcod', '$stan', '$promocja')";
	  if($nazwa!="")
	  { 
	   $result=mysqli_query($id,$sql);
	   echo"Dane $nazwa zostaly zapisane <BR><BR><BR>";
	  }
  }
  
  echo"
       <FORM action='' method='POST'>
	     Nazwa <INPUT type='text' name='nazwa'><BR>
		 VAT <SELECT name='vat'>";
		$sql="select * from vat";
        $result=mysqli_query($id,$sql);
		while($row=mysqli_fetch_array($result))
		{
		  echo"<OPTION value='$row[vid]'>$row[stawka]</OPTION>";
	    }
  echo"	 </SELECT><BR>
		 Jednostka <INPUT type='text' name='jm'><BR>
		 Cena <INPUT type='text' name='cena_netto'><BR>
		 Grupa towarow <SELECT name='grupa'>";
		$sql="select * from grupy";
        $result=mysqli_query($id,$sql);
		while($row=mysqli_fetch_array($result))
		{
		  echo"<OPTION value='$row[grid]'>$row[nazwa]</OPTION>";
	    }
  echo"	 </SELECT><BR>
		 Kod kreskowy <INPUT type='text' name='barcod'><BR>
		 Stan <INPUT type='text' name='stan'><BR>
		 Cena promocyjna <INPUT type='text' name='promocja'><BR>
		 <INPUT type='submit' name='OK' value='Zapisz'>
		 <A href='baza.php'>WROC</A>
	   </FORM>
     ";
  mysqli_close($id);
?>