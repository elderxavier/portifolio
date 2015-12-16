<?php
$servername = "localhost";
//$username = "ex2tec_user";
//$username ='ex2tec_mage1';
//$username ="ex2tec_novo";
//$password = "zH5Ne&e&skG";

$username ="eldersx_user";
$password = "zH5Ne&e&skG";
$dbname = "eldersx_magento";
//"ex2tec_mage1"



//zH5Ne&e&skG
/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=ex2tec_mage1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
*/

$connect=mysql_connect($servername,$username,$password) or die("Unable to Connect");
        mysql_select_db($dbname) or die("Could not open the db");
	echo "OK";        
$showtablequery="SHOW TABLES FROM dbname";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
	}

?>
