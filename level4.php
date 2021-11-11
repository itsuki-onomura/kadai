<?php
$number = 3;
//echo $number*2;
echo double(3);
function double($num){
    return $num * 2;
}
echo "\n";

 function add($a, $b){
 $result = $a+$b;
  for($i = 1; $i <= 10; $i++){

        $result += $i;
    }
    
     return $result;
 }
 echo "\n";
 
 $arr = array(1, 3, 5 ,7, 9);
 array_product($arr);
 echo "\n";
 
  function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){

 }

 return $max_number;
 }
 
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

echo "sample1 ------------------------\r\n";
$list = array();
var_dump($list);
array_push($list, 1);
var_dump($list);
array_push($list, 2, 3);
var_dump($list);

$array1= array('a', 'b', 'c');
 
$array2 = array('d', 'e', 'f');
 
print_r(array_merge($array1, $array2));

$value = time();
echo $value . "\n";
echo date('Y/m/d', $value) . "\n";

echo date('Y/m/d');
echo "\n";
 
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";