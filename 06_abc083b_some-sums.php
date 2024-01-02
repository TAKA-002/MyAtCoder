<?php

# スペースで値を分割して配列に格納する。
$divided_vals = preg_split("/\s/", trim(fgets(STDIN)));
$divided_nums = array_map('intval', $divided_vals);
[$N, $A, $B] = $divided_nums;


# Nは1以上N以下の正数である。
# 1からNまでのすべての値を洗い出す。
# 洗い出した値をそれぞれ各桁へ分割をする。
$ary_from_one_to_N = [];
for($i = 1; $i <= $N; $i++) {
    $ary_from_one_to_N[] = $i;
}


# 各桁に分割した値を合計する。
# ここまでをNまですべて行う。
# その値は配列に格納しておく。
$all_N_and_sum = array_map(function ($N_number) {
    preg_match_all("/[0-9]/", $N_number, $ary_each_digit);
    $obj["N_num"] = $N_number;
    $obj["sum_val"] = array_sum(array_map('intval', $ary_each_digit[0]));
    return $obj;
}, $ary_from_one_to_N);


# 配列に格納した値から、A以上B未満の値を抽出する。
$filterd_objs = array_filter($all_N_and_sum, function ($ary) use ($A, $B) {
    return $ary["sum_val"] >= $A && $ary["sum_val"] <= $B;
});


$result_number = 0;
foreach($filterd_objs as $item) {
    $result_number += $item["N_num"];
}

echo $result_number;
