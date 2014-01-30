<?php

testPrint(4, 11);

function testPrint($start, $end) {

    $c_int = true;

    for ($i = $start; $i <= $end; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            if ($i % 3 == 0) {
                echo 'Fizz';
            }
            if ($i % 5 == 0) {
                echo 'Buzz';
            }
            $c_int = false;
        } else {
            if ($c_int) {
                echo $i;
            } else {
                echo 'Bazz';
            }
            $c_int = true;
        }
        echo ' ';
    }
}