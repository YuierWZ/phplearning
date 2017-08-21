<?php

$servername = "localhost";
$username = "test01";
$password = "test01";
try {
$conn=new PDO("mysql:host=$severname;dbname=test01",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM MyGuests");
$stmt->execute();

}
catch (PDOException $e){
    echo $e->getMessage();
}
$conn=null;

?>