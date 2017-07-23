<?php 
$x=5;
$y=10;
class test{
    function pr() {
        echo "class name ". __CLASS__ ."\n";
        echo  'function name is ' . __FUNCTION__ ."\n";
    }
}
$t = new test();
$t->pr();
$cars=array("vovle","bwm","benzs");
echo "php\n ";
echo "my first php script\n";
function myTest(){
    static $y=10;
    echo "Test variables inside the function:\n";//源代码中实现换行
    echo $y;
    $y++;
    echo "\n";
    echo "</br>";//在网页中实现了换行
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
 $x1=array(a=>"red",b=>"blue");
 $y1=array(a=>"blue",b=>"red");
 $z=$x1+$y1;
 var_dump($z);
 echo "\n";
 var_dump($x1!=$y1);
 echo "\n";
 echo  count($cars);
 echo "\n";
 echo $x1["a"];
 echo "\n";
 foreach ($x1 as $x){
     echo $x."\n";
 }
 //将数组进行排序
 $number=array(1,23,45,36,7,8,88);
 sort($number);//升序
 $arrlen=count($number);
 for($i=0;$i<$arrlen;$i++)
 {
     echo $number[$i];
     echo " ";
 }
 echo "\n";
 rsort($number);//降序排列
 for($i=0;$i<$arrlen;$i++){
     echo $number[$i];
     echo" ";
 }
 echo "\n";
 echo $_SERVER['PHP_SELF'];
 echo "\n";
 function WriteMyname($a,$b){
     echo "my name is ".$a." ".$b."\n";
     return $a.$b."\n";
 }
 WriteMyname("like","you");
 echo WriteMyname("love ","you")."\n";
 echo "this is ". __LINE__ ."line\n";
 echo "this file in". __FILE__ ."  \n"
?>