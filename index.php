<?php

// $servername = "localhost";
// $username = "test01";
// $password = "test01";
// try {
// $conn=new PDO("mysql:host=$severname;dbname=test01",$username,$password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stmt = $conn->prepare("SELECT * FROM MyGuests");
// $stmt->execute();

// }
// catch (PDOException $e){
//     echo $e->getMessage();
// }
// $conn=null;
// class Car {
//     public $speed = 1;
//     //����speedUp������ʹspeed��10
//     public function speedUp(){
//         $this->speed=$this->speed+10;
//     }
//     function start(){
//         echo "test\n";
//     }
    
// }
// $car = new Car();
// $car->speedUp();
// echo $car->speed."\n";
// $car->start();
setcookie('test', time());
ob_start();
print_r($_COOKIE);
$content = ob_get_contents();
$content = str_replace(" ", '&nbsp;', $content);
ob_clean();
header("content-type:text/html; charset=utf-8");
echo '��ǰ��CookieΪ��<br>';
echo nl2br($content);
?>