<?php
$mem = ["kaneko", "fukuda", "kubota", "furuyama"];
// count（要素の数を数える）
echo count($mem);
echo '<br>';

// sort（要素の並べ替え）
sort($mem);
var_dump($mem);
echo '<br>';

// in_array（配列に中にある要素が存在しているか）
var_dump(in_array("kaneko", $mem));
echo '<br>';

// implode（配列を結合して文字列に変換）
$join = implode(":", $mem);
var_dump($join);
echo '<br>';

// explode（文字列を指定の区切りで配列にする）
$array = explode(":",$join);
var_dump($array);
?>