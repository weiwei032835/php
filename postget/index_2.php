<?php

    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $arr = [$a, $b, $c];

    echo max($arr);//最大值
    echo "<br/>";
    echo round(array_sum($arr) / count($arr));

?>
