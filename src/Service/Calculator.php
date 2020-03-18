<?php
/**
 * User: ylezghed
 * Date: 18/03/2020
 * Time: 14:57
 */

declare(strict_types=1);
namespace App\Service;

class Calculator
{
    public function add($a,$b)
    {
        return $a + $b;
    }

    public function multiple($a,$b)
    {
        return $a* $b ;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function div($a, $b)
    {
        if ($b == 0)
             throw  new \Exception('Division by zero.');

        return $a / $b;
    }
}
