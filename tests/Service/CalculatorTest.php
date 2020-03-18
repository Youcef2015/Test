<?php
/**
 * User: ylezghed
 * Date: 18/03/2020
 * Time: 15:07
 */
declare(strict_types=1);


namespace App\Tests\Service;


use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $return)
    {
        $this->assertSame($return, $this->calculator->add($a, $b));
    }

    /**
     * @dataProvider multipleProvider
     */

    public function testMultiple($a, $b, $return)
    {
        $this->assertSame($return, $this->calculator->multiple($a, $b));
    }

    /**
     * @dataProvider subProvider
     */

    public function testSub($a, $b, $return)
    {
        $this->assertSame($return, $this->calculator->sub($a, $b));
    }

    /**
     *    @expectedException \Exception
     */
    public function testDivisionByZeroThrowsException()
    {
        $this->calculator->div(15, 0);
    }

    /**
     * @dataProvider divProvider
     */
    public function testDivisionByNotZero($a, $b, $return)
    {
        $this->assertSame($return, $this->calculator->div($a, $b));
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

    public function multipleProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 0],
            [1, 1, 1],
            [1, 4, 3]
        ];
    }

    public function subProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, -1],
            [1, 1, 0],
            [1, 4, 3]
        ];
    }

    public function divProvider()
    {
        return [
            [0, 3, 0],
            [1, 1, 1],
            [1, 4, 0.25]
        ];
    }
}
