<?php

# 標準入力を取得する(stginは文字列)
$stdin = trim(fgets(STDIN));
# 入力値を１文字ずつ分解する
$stdin_array = str_split($stdin);
$num_one_count = count(array_filter($stdin_array, "countCheck"));

function countCheck($val){
    if((int)$val === 1){
        return true;
    }
}

echo $num_one_count;
