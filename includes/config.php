<?php
 

/* define('DB_HOST','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
define('DB_NAME','car_rental_admin');*/

$server = "localhost";
$user = "root";
$password = "";
$db = "cr";

// connecting to database
$dbh = mysqli_connect($server, $user, $password, $db)
or die("Failed to connect".mysqli_error($conn));
/* try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}*/
//Check the connection
if($dbh == false){
    dir('Error: Cannot connect to the database...');
}

?>