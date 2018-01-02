<?php
/**
 * Created by PhpStorm.
 * User: marcalberga
 * Date: 2/1/18
 * Time: 21:07
 */

namespace App\Training\Tests;


use App\Training\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculatorCanAdd()
    {
        $calculator = new Calculator();

        $a = 5;
        $b = 3;

        $result = $calculator->add($a, $b);

        $this->assertEquals($result, 8);
    }
}