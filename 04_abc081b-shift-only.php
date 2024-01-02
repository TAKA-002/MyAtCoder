<?php

# 標準入力から２行取得
$num_of_items_line = trim(fgets(STDIN));
$str_vals_line = trim(fgets(STDIN));


# 配列の値を数値に変換
$int_vals = array_map('intval', preg_split('/\s/', $str_vals_line));
$count = 0;

# 配列の値が偶数かチェックし、すべて偶数の間はに繰り返す
while(!in_array(false, array_map('checkEven', $int_vals))) {

    # 配列の値の最小値を取得
    $min_val = min($int_vals);

    # 最小値の値が偶数の場合
    if(checkeven($min_val)) {
        # 配列のすべての値を2で割る。それを$int_valsに再代入
        $int_vals = array_map(function ($val) {
            return $val / 2;
        }, $int_vals);

        # カウントを増やす
        $count++;
    }
}

echo $count;


function checkeven($val)
{
    if ($val % 2 !== 0) {
        return false;
    } else {
        return true;
    }
}
