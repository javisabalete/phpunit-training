<?php
/**
 * Created by PhpStorm.
 * User: marcalberga
 * Date: 2/1/18
 * Time: 23:27
 */

namespace App\Training\Tests;

use App\Training\Service\Calculator;
use App\Training\Service\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testAddMultipleValues()
    {
        $calculatorStub = $this->createConfiguredMock(
            Calculator::class,
            [
                'add' => 10
            ]
        );

        $mathService = new MathService($calculatorStub);

        $arrayOfValues = [10];

        $result = $mathService->addMultipleValues($arrayOfValues);

        $this->assertEquals(10, $result);
    }
}
