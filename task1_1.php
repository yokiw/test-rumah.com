<?php

testPrint(12, 16);

function testPrint($start, $end) {
    
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            if ($i % 3 == 0) {
                echo 'Fizz';
            }
            if ($i % 5 == 0) {
                echo 'Buzz';
            }
        } else {
            echo $i;
        }
        echo ' ';
    }
}