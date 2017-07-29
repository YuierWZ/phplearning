<?php
$servername = "localhost";
$username = "test01";
$password = "test01";
try {
$conn=new PDO("mysql:host=$severname;dbname=test01",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt=$conn->prepare("insert into MyGuests(firstname,lastname,email)
values(:firstname,:lastname,:email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
// $stmt = $conn->prepare("insert into MyGuests(firstname,lastname,email)
//  values(:firstname,:lastname,:email)");
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':lastname', $lastname);
// $stmt->bindParam(':email', $email);

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

// 插入其他行
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

}
catch (PDOException $e){
    echo $e->getMessage();
}
$conn=null;


    
    
    
    
    
//     $sql="create table MyGuests(
//     id int unsigned AUTO_INCREMENT primary key,
//     firstname varchar(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
//     )";
// $sql="insert into  MyGuests(firstname,lastname,email) 
//     VALUES ('wong', 'yue', 'sadn@ewwwple.com')";
//     $conn->exec($sql);
//     echo "Table insert sucessfully";
// }
//     catch (PDOException $e){
//         echo $sql."<br>".$e->getMessage();
//     }
//     $conn=null;
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//     // sql to create table
//     $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP
//     )";
    
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table MyGuests created successfully";
// }
// catch(PDOException $e)
// {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;
?>