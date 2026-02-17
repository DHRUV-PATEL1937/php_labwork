<?php
    $arr = array(1, 2, 3, 4, 5, 6);
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i += 2) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$i + 1];
        $arr[$i + 1] = $temp;
    }
    echo "Array after swapping:\n";
    foreach ($arr as $a) {
        echo $a . " ";
    }
?>
