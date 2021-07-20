<?php

function sayHi($length,$width,$height) {
    // 関数の中で定義する変数 => ローカル変数
    
    echo $length*$width*$height;
}

echo sayHi(5,10,8);

?>