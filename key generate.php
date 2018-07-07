<?php
if(isset($_POST["link"])){
	for($x=0;$x<14;$x++)
		{
		 $str1 = "key";
		 $str2 = (string)$x;
		 $str = $str1.$str2;
		 $key = base64_encode($str);
		 $y=$x+1;
		 echo "key $y :";
		 echo $key;
		 echo "<br>";
		}
}
?>