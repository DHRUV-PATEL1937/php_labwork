<?php
    $str = "Hello world";
    $rev ="";
    $n = strlen($str);
    for($i =$n-1;$i>=0;$i--){
        $rev.=$str[$i];
    }
    print("<h1>".$rev."</h1>");
?>