<?php
    $dsn = 'localhost';
    $username='root' ;
    $password='root';
//Don't use password for windows users
    
        $db = mysqli_connect($dsn, $username, $password);
    if(!$db)
    {
        die("Database connection failed: " . mysqli_error());
    }
    
    $db_select = mysqli_select_db($db,'securage_database');
    if(!$db_select)
    {
        die("Database selection failed");
    }
	else
		{


if($rslt = mysqli_query($db,'SELECT * FROM contact_table'))
{
	
	//$temp = array();
	while ($r = mysqli_fetch_assoc($rslt))
	 {
		//$temp = $r;
		
		$output[] = $r;
		
	}
	print(json_encode($output));
}
else
{
	echo "sorry";
}
}
mysqli_close();
?>