<?php
$km = 135;
$tien = 0;
if ($km == 1) {
    $tien += 15000;
    echo "$tien";
} elseif ($km > 1 && $km < 5) {
    $tien = 15000 + ($km-1)*12000;
    echo "$tien";
}
elseif ( $km > 5) {
    $tien = 15000 + 5*12000 + ($km - 6)*9000;
    echo "$tien";

}elseif($km > 140) {
    $tien = 15000 + 5*12000 + ($km - 6)*9000;
    $tien -= $tien*12/100;
    echo "$tien";

}