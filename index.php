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
 //�������������
 $number=array(1,23,45,36,7,8,88);
 sort($number);//����
 $arrlen=count($number);
 for($i=0;$i<$arrlen;$i++)
 {
     echo $number[$i];
     echo " ";
 }
 echo "\n";
 rsort($number);//��������
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
//  class Site {
//      /* ��Ա���� */
//      var $url;
//      var $title;
     
//      /* ��Ա���� */
//      function setUrl($par){
//          $this->url = $par;
//      }
     
//      function getUrl(){
//          echo $this->url . PHP_EOL;
//      }
     
//      function setTitle($par){
//          $this->title = $par;
//      }
     
//      function getTitle(){
//          echo $this->title . PHP_EOL;
//      }
//  }
class Site{
    var $url;
    var $title;
    function __construct($par1,$par2){
        $this->url=$par1;
        $this->title=$par2;
    }
    function setUrl($par){
        $this->url=$par;
    }
    function getUrl(){
        echo  $this->url. PHP_EOL;    
    }
    function setTitle($par){
        $this->title=$par;
    }
    function getTitle(){
        echo $this->title.PHP_EOL;
    }
}
//  $youj = new Site;
//  $taobao = new Site;
//  $google = new Site;
//  $youj->setTitle( "W3Cschool�̳�" );
//  $taobao->setTitle( "�Ա�" );
//  $google->setTitle( "Google ����" );
 $youj=new Site("wwww.w3cschool.com","w3�̳�");
 $taobao=new Site("www.taobao.com","�Ա�");
 $google=new Site("www.google.com","�ȸ�����");
//  $youj->setUrl( 'www.w3cschool.cn' );
//  $taobao->setUrl( 'www.taobao.com' );
//  $google->setUrl( 'www.google.com' );
 // ���ó�Ա��������ȡ�����URL
//  $youj->getTitle();
//  $taobao->getTitle();
//  $google->getTitle();
$youj->getTitle();
$taobao->getTitle();
$google->getTitle();
 $youj->getUrl();
 $taobao->getUrl();
 $google->getUrl();
 
 class MyDestructableClass {
     function __construct() {
         print "���캯��\n";
         $this->name = "MyDestructableClass";
     }
     
     function __destruct() {
         print "���� " . $this->name . "\n";
     }
 }
 $obj = new MyDestructableClass();
 class child_Site extends Site{
     var $category;
     function setCate($par){
         $this->category = $par;
     }
     
     function getCate(){
         echo $this->category . PHP_EOL;
     }
 }
 interface iTemplate{
     function setVariable($name, $var);
     function getHtml($template);
 }
 class Template implements iTemplate{
//      private $vars = array();
     
//      public function setVariable($name, $var)
//      {
//          $this->vars[$name] = $var;
//      }
     
//      public function getHtml($template)
//      {
//          foreach($this->vars as $name => $value) {
//              $template = str_replace('{' . $name . '}', $value, $template);
//          }
         
//          return $template;
//      }
       private $vars=array();
       function setVariable($name, $var){
           $this->vars[$name]=$var;
       }
       function getHtml($template){
           foreach ($this->vars as $name=>$value){
               $template=str_replace("{".$name."}", $value, $template);
           }
           return $template;
       }
 }
 abstract class AbstractClass
 {
     // ǿ��Ҫ�����ඨ����Щ����
     abstract protected function getValue();
     abstract protected function prefixValue($prefix);
     
     // ��ͨ�������ǳ��󷽷���
     public function printOut() {
         print $this->getValue() . PHP_EOL;
     }
 }
 
 class ConcreteClass1 extends AbstractClass
 {
     protected function getValue() {
         return "ConcreteClass1";
     }
     
     public function prefixValue($prefix) {
         return "{$prefix}ConcreteClass1";
     }
 }
 
 class ConcreteClass2 extends AbstractClass
 {
     public function getValue() {
         return "ConcreteClass2";
     }
     
     public function prefixValue($prefix) {
         return "{$prefix}ConcreteClass2";
     }
 }
 
 $class1 = new ConcreteClass1;
 $class1->printOut();
 echo $class1->prefixValue('FOO_') . PHP_EOL;
 $class2 = new ConcreteClass2;
 $class2->printOut();
 echo $class2->prefixValue('FOO_') . PHP_EOL;
 class Foo {
     public static $my_static = 'foo';
     
     public function staticValue() {
         return self::$my_static;
     }
 }
 
 echo Foo::$my_static . PHP_EOL;
 $foo = new Foo();
 
 print $foo->staticValue() . PHP_EOL;
 echo "this is ". __LINE__ ."line\n";
 echo "this file in". __FILE__ ."  \n"


?>