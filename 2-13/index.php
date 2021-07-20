<?php
$x = 8.3;
// ceil（切り上げ）
echo ceil($x);
echo '<br>';

// floor（切り捨て）
echo floor($x);
echo '<br>';

// round（四捨五入）
echo round($x);
echo '<br>';

// pi（円周率）
echo pi();
echo '<br>';
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(10);
echo '<br>';

// mt_rand（乱数）
echo mt_rand(50, 80);
echo '<br>';

// strlen（文字列の長さ）
$str = "kaneko";
echo strlen($str);
echo '<br>';

// strpos（検索）
echo strpos($str, "k");
echo '<br>';

// substr（文字列の切り取り）
echo substr($str, 3, 2);
echo '<br>';

// str_replace（置換）
echo str_replace("neko", "NEKO", $str);
echo '<br>';

// printf（フォーマット化した文字列を出力）
$name = "金子さん";
$number = 777;
printf("%sさんのラッキーナンバーは%dです", $name, $number);
echo '<br>';

// sprintf（変数に代入できるprintf）
$lucky_number = sprintf("%sさんのラッキーナンバーは%dです", $name, $number);
echo $lucky_number;
?>