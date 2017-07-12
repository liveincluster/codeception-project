<?php


namespace lic\calculator;


class Calculator
{

    /**
     * Sum of 2 numbers
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * A minus B
     *
     * @param $a
     * @param $b
     * @return mixed
     */
    public function sub($a, $b)
    {
        return $a - $b;
    }
}