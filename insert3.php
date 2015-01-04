<?php
	$host='localhost';
	$uname='root';
	$pwd='root';
	$db="securage_database";

	$con = mysqli_connect($host,$uname,$pwd) or die("connection failed".mysqli_error);
	mysqli_select_db($con,'securage_database') or die("db selection failed".mysqli_error);
	 
	//$phno=$_POST['phno'];
	//$name=$_POST['name'];
	$content = $_POST['content'];
	//$date = $_POST['date'];
	
	$flag['code']=0;

	if($r=mysqli_query($con,"insert into message values('','$content',now()) "))
	{
		$flag['code']=1;
		
	}

	print(json_encode($flag));
	mysqli_close($con);
?>