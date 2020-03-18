<?php
/**
 * User: ylezghed
 * Date: 18/03/2020
 * Time: 14:56
 */
declare(strict_types=1);


namespace App\Controller;
use App\Service\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CalculateController
{
    /**
     * @Route("/calculate", name="calculate")
     */

    public function index(Request $request, Calculator $calculator)
    {
        $a = $request->get('a');
        $b = $request->get('b');
        $op = $request->get('op');

        $result = " ";
        switch ($op) {

            case '+':
                $result = $calculator->add($a,$b);
                break;

            case '*':
                $result =  $calculator->multiple($a,$b);
                break;

            case '-':
                $result =  $calculator->sub($a,$b);
                break;

            case '/':
                $result =  $calculator->div($a,$b);
                break;
        }

        return new Response($result);
    }
}
