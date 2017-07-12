<?php


use lic\calculator\Calculator;

class CalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Calculator
     */
    private $calculator;

    protected function _before()
    {
        $this->calculator = new Calculator();
    }

    protected function _after()
    {
    }

    /**
     * @dataProvider addNumbers
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);

        expect($result)->equals($expected);
    }

    /**
     * @dataProvider subNumbers
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testSub($a, $b, $expected)
    {
        $result = $this->calculator->sub($a, $b);

        expect($result)->equals($expected);
    }

    public function addNumbers()
    {
        return [
            [5, 2, 7],
            [1, 1, 2],
            [-3, 4, 1],
            [-3, 2, -1]
        ];
    }

    public function subNumbers()
    {
        return [
            [5, 2, 3],
            [1, 1, 0],
            [-3, 4, -7],
            [-3, 2, -5]
        ];
    }
}