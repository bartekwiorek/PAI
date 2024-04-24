<?php
  $id=mysqli_connect("localhost","root","","iv_ti_1");
  $kid=0;
  if(isset($_GET['kid'])) {$kid=$_GET['kid'];};
  $kid=(int)$kid;
  
  $pid=0;
  if(isset($_GET['pid'])) {$pid=$_GET['pid'];};
    
  if (($kid>0) && ($pid==0))
  {
	$sql="select *from towary where tid='$kid'";
	$result=mysqli_query($id,$sql);  
	$row=mysqli_fetch_array($result);
    echo"Czy chcesz usunac<BR>$row[nazwa]<br><br>
	     <A href='kasuj.php?kid=$kid&pid=1'>TAK</A> 
		 <A href='baza.php'>NIE</A> 
	    ";	
  };
  
  if (($kid>0) && ($pid==1))
  {
	$sql="delete from towary where tid='$kid'";
	$result=mysqli_query($id,$sql);  
    echo"Dane zostaly usuniete<BR>
	     <A href='baza.php'>WROC</A>";
	
  }
  
  mysqli_close($id);
?>