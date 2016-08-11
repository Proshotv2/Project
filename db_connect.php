<?php
$servername = "JNORRIS-PC";
$username = "AD";
$password = "password";
$database = "HRM";

try {
//Creating connection for mysql
$conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>