<?php
    $first = 1;
    function Josephus($person) {
        while($first != $person) {
            $first + 2;
        }
        echo "$first";
    }
    Josephus(5);
?>