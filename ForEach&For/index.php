<?php

$i =1;
$arr = array("1","2");
$arr1 = array("1","2","3","4","5");
switch ($i) {
    case 1:
        for ($j = 0; $j< sizeof($arr); $j++){
            echo"Số thứ: $arr[$j]<br>";
        }
        break;
    case 2:
        foreach($arr1 as $x){
            echo "Số thứ: $x<br>";
        }    
        break;
}

?>