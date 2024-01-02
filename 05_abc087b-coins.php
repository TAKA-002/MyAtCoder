<?php

class CoinCalc
{
    private $five_hundred_coin_num;
    private $one_hundred_coin_num;
    private $fifty_coin_num;
    private $sum_fee;

    public function __construct($five_hundred_coin_stdin, $one_hundred_coin_stdin, $fifty_coin_stdin, $sum_fee_stdin)
    {
        $this->five_hundred_coin_num = intval($five_hundred_coin_stdin);
        $this->one_hundred_coin_num = intval($one_hundred_coin_stdin);
        $this->fifty_coin_num = intval($fifty_coin_stdin);
        $this->sum_fee = intval($sum_fee_stdin);
    }

    public function searchPattern()
    {
        $correct_pattern_count = 0;

        for($i = 0; $i <= $this->five_hundred_coin_num; $i++) {
            for($j = 0; $j <= $this->one_hundred_coin_num; $j++) {
                for($k = 0; $k <= $this->fifty_coin_num; $k++) {
                    if((500 * $i + 100 * $j + 50 * $k) === $this->sum_fee) {
                        $correct_pattern_count++;
                    }
                }
            }
        }
        echo $correct_pattern_count;
    }

}

# 標準入力から値を取得して変数へ代入する
$five_hundred_coin_stdin = trim(fgets(STDIN));
$one_hundred_coin_stdin = trim(fgets(STDIN));
$fifty_coin_stdin = trim(fgets(STDIN));
$sum_fee_stdin = trim(fgets(STDIN));

$coinCalc = new CoinCalc($five_hundred_coin_stdin, $one_hundred_coin_stdin, $fifty_coin_stdin, $sum_fee_stdin);
$coinCalc->searchPattern();
