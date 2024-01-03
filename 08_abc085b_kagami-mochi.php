<?php

$num_of_mochi = trim(fgets(STDIN));
$vals = [];

for($i = 0; $i < $num_of_mochi; $i++) {
    $input_val = (int)trim(fgets(STDIN));
    $vals[] = $input_val;
}

print_r(count(array_unique($vals)));
