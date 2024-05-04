<?php  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "amlanshanker2005";  
$dbName     = "spice";  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);    
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
?>