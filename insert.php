<?php
	$host='localhost';
	$uname='root';
	$pwd='root';
	$db="securage_database";

	$con = mysqli_connect($host,$uname,$pwd) or die("connection failed".mysqli_error);
	mysqli_select_db($con,'securage_database') or die("db selection failed".mysqli_error);
	 
	$phno=$_POST['phno'];
	//$name=$_POST['name'];

	$flag['code']=0;

	if($r=mysqli_query($con,"insert into contact_table values('$phno') "))
	{
		$flag['code']=1;
		
	}

	print(json_encode($flag));
	mysqli_close($con);
?>