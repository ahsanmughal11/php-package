<?php

namespace AhsanMughal11\Math;

class Calculator
{
    /**
     * Adds two numbers.
     *
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function add(int|float $a, int|float $b)
    {
        return $a + $b;
    }

    /**
     * Subtracts two numbers.
     *
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function subtract(int|float $a, int|float $b)
    {
        return $a - $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function multiply(int|float $a, int|float $b)
    {
        return $a * $b;
    }

    /**
     * Divides two numbers.
     *
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     * @throws \InvalidArgumentException if $b is zero.
     */
    public function divide(int|float $a, int|float $b)
    {
        if ($b === 0) {
            throw new \InvalidArgumentException("The second argument cannot be zero.");
        }
        return $a / $b;
    }

}