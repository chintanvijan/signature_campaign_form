<?php 
	if(isset($_POST['su'])){
	 $username = "admin";
    $password = "hello123";
    $s=0;
	$un = $_POST['n1'];
	$pas = $_POST['n2'];
	if(($un == $username) && ($pas == $password))
	{
	$conn = mysqli_connect("localhost","root","","AAP");
	$query = "select * from t1;";
	if ($result=mysqli_query($conn,$query))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
     echo "<br> $row[0] &nbsp,$row[1] &nbsp,$row[2] &nbsp,$row[3] &nbsp,$row[4]";
     $s = $s + $row[4];
    }
  // Free result set
  mysqli_free_result($result);
}

	echo "<br>Total Signs: $s";
	echo '<br><form method="POST" action="key generate.php"><input type="submit" name="link" value="view keys"/></form>';
}
else{
	echo "Invalid username or password!";
}
}
 ?>
