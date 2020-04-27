<?php  

$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "shop";  
// Place the password for the MySQL database here 
$db_pass = "";  
// Place the name for the MySQL database here 
$db_name = "cartshopping"; 

// Run the actual connection here  
mysql_connect("localhost","shop","") or die ("could not connect to mysql");
mysql_select_db("cartshopping") or die ("no database");              
?>