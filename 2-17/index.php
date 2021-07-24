<?php
$sum=0;
for($n=1;$sum < 40;$n++){
  $number = mt_rand(1, 6);
  echo $n."回目＝".$number;
  echo '<br>';
  $sum += $number;
  if($sum>=40){
    echo "合計".$n."回でゴールしました";
  }
}
echo '<br>';
echo '<br>';
date_default_timezone_set( 'Asia/Tokyo' );

if (strtotime(date('H:i')) > strtotime('6:00') && strtotime(date('H:i')) < strtotime('12:00'))
{
  echo date("今H時台です", time());
  echo '<br>';
  echo 'おはようございます！';
}else if(strtotime(date('H:i')) > strtotime('12:00') && strtotime(date('H:i')) < strtotime('18:00')){
  echo date("今H時台です", time());
  echo '<br>';
  echo 'こんにちわ！';
}else{
  echo date("今H時台です", time());
  echo '<br>';
  echo 'こんばんわ！';
}


?>