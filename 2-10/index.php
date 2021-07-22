<?php

function volume($length,$width,$height) {
    // 関数の中で定義する変数 => ローカル変数
    
    echo $length*$width*$height;
}

echo volume(5,10,8);

?>