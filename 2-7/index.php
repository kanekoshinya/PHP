<?php
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($color);
$color =array_merge($color ,array("yellow" => "黄色"));
echo '<br>';

var_dump($color);

?>