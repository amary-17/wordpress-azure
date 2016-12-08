<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "user name";
$pwd = "password";
$db = "registration";
try{
    $conn = new PDO
( "sqlsrv:server = tcp:registration123.database.windows.net,1433; Database = registration", "amary-17", "{Scfe4zdg}");
    $conn->setAttribute
( PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>
