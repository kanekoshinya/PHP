<?php
$sum=0;
$n=1;
while($sum < 40) {
  $number = mt_rand(1, 6);
  echo $n."回目＝".$number;
  echo '<br>';
  $n++;
  $sum += $number;
  if($sum>=40){
    echo "合計".($n - 1)."回でゴールしました";
  }
}

echo '<br>';
echo '<br>';
date_default_timezone_set( 'Asia/Tokyo' );
$time = date("今H時台です", time());
if (strtotime(date('H:i')) >= strtotime('6:00') && strtotime(date('H:i')) < strtotime('12:00'))
{
  echo $time;
  echo '<br>';
  echo 'おはようございます！';
}else if(strtotime(date('H:i')) >= strtotime('12:00') && strtotime(date('H:i')) < strtotime('18:00')){
  echo $time;
  echo '<br>';
  echo 'こんにちわ！';
}else{
  echo $time;
  echo '<br>';
  echo 'こんばんわ！';
}


?>