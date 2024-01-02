<?php

# 標準入力を取得する
$input = trim(fgets(STDIN));

# 標準入力の値をスペースで分割する。$explodedは配列になる。
$exploded = explode(' ', $input);

# 配列の積を求める
$multiplied = array_product($exploded);

# もしmultipliedが偶数ならEvenを、奇数ならOddを出力する
if ($multiplied % 2 === 0) {
    echo 'Even';
} else {
    echo 'Odd';
}
