<?php

const TEN_K_YEN = 10000;
const FIVE_K_YEN = 5000;
const ONE_K_YEN = 1000;
const ZERO_YEN = 0;
$ten_k_yen_count = 0;
$five_k_yen_count = 0;
$one_k_yen_count = 0;

[$count , $fee] = explode(' ', trim(fgets(STDIN)));
$count = (int)$count;
$fee = (int)$fee;
$roop = 0;


for($i = 1; $i <= $count; $i++) {
    for($j = 1; $j <= $count; $j++) {

    }
}
if($fee === ZERO_YEN && $roop === $count) {
    echo "$ten_k_yen_count $five_k_yen_count $one_k_yen_count";
} else {
    echo "-1 -1 -1";
}
