<?php 
$x=5;
$y=10;
$cars=array("vovle","bwm","benzs");
echo "php\n ";
echo "my first php script\n";
function myTest(){
    static $y=10;
    echo "Test variables inside the function:\n";//Դ������ʵ�ֻ���
    echo $y;
    $y++;
    echo "\n";
    echo "</br>";//����ҳ��ʵ���˻���
 }
 myTest();
 echo "Test variables outside the function:\n";
 echo $x;
 
 function myTest2(){
//     global $x,$y;
//     $y=$x+$y;
$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    echo "\n";

 }
 myTest2();
 echo $y;
 echo "\n";
 myTest();
 myTest();
 myTest();
echo "\n";
 echo $cars[0];
 echo "\n";
 print "I will work hard\n";
 print_r($cars);
 echo "\n";
 var_dump($x);
 echo "\n";
 $xe=0x11;
 var_dump($xe);
 echo "\n";
 var_dump($cars);
 echo "\n";
 define(AE, "this is a define");
 echo AE;
 echo "\n";
 $txt1="string ";
 $txt2="is important";
 echo $txt1." ".$txt2."\n";
 echo strlen($txt1);
 echo "\n";
 echo strpos($txt1, r)."\n";
 ?>