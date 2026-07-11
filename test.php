<?php

require __DIR__ . '/vendor/autoload.php';

use AhsanMughal11\Math\Calculator;

$calculator = new Calculator();
echo $calculator->add(5, 3); // Output: 8
echo $calculator->subtract(5, 3); // Output: 2
echo $calculator->multiply(5, 3); // Output: 15
echo $calculator->divide(5, 3); // Output: 1.6666666666667