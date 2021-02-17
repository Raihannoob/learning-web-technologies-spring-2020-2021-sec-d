<?php
    $v1 = 10;
    $v2 = 3;
    $v3 = 40;

    if($v1 > $v2 && $v1 > $v3)
    {
        echo $value1.' value is largest';
    }
    elseif($v2 > $v1 && $v2 > $v3)
    {
        echo $v2.' value is largest';
    }
    elseif($v3 > $v1 && $v3 > $v1)
    {
        echo $v3.' value is largest';
    }
?>