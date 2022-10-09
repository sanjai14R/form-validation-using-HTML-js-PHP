<?php
	//$uname = $_GET["txtuser"];
	//$upass = $_GET["txtpass"];
	$uname = $_GET["uname"];
	$upass = $_GET["upass"];
	$flag = false;
	$con=mysqli_connect("localhost","root","123456","test");
	$result = mysqli_query($con, "select * from users"); 
	while($x = mysqli_fetch_array($result))
	{
		if($uname == $x["uname"] && $upass == $x["upass"])
			$flag = true;
	}

	if($flag)
	  echo "Valid user!";
	else
	  echo "Invalid username or password!";
?>
