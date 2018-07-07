<?php
  	
  	$vs = $_POST['vidhansabha'];
  	$wn = $_POST['wname'];
  	$ps = $_POST['pollstation'];
  	$num_houses = $_POST['n1'];
  	$num_signs = $_POST['n2'];
  	$conn = mysqli_connect("localhost","root","","AAP");
  	$query="insert into t1 values('$vs','$wn','$ps','$num_houses','$num_signs')";
  	mysqli_query($conn,$query);
  	echo '<script language="javascript">alert("Response submitted successfully!");</script>';
  	header("Location: index.php");
?>