<?php

# N枚のカードがある
# カードには数字が書かれている
# Alice Bobが交互に１枚ずつカードを取っていく。
# Aliceが先に取る。
# 大きい数字から取っていく。
# Aliceがカードを取ったら＋し、Bobがカードをとったら−する。
# すべてのカードを取るまでお互いにカードを取る

$card_count = (int)trim(fgets(STDIN));
$all_card_nums = explode(" ", fgets(STDIN));
$all_card_nums = array_map("intval", $all_card_nums);

rsort($all_card_nums);

for($i = 0; $i < $card_count; $i++) {
    if($i === 0) {
        $result = $all_card_nums[$i];
    } elseif($i % 2 !== 0) {
        $result -= $all_card_nums[$i];
    } elseif($i % 2 === 0) {
        $result += $all_card_nums[$i];
    }
}

print_r($result);
