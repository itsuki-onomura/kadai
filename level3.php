<?php
$name="itsuki";
if($name){
echo "私の名前はitsukiです";
}else{
echo "あなたの名前ではありません";
}
echo"\n";
$total = 0;
echo $total;
for($i = 0; $i <= 10000; $i++){
$total += $i;
}
echo $total;
echo "\n";
$fruits =  array("apple", "banana", "grape");
foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";}
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
echo "\n";
