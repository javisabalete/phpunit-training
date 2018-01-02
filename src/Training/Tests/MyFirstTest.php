<?php
/**
 * Created by PhpStorm.
 * User: marcalberga
 * Date: 2/1/18
 * Time: 21:07
 */

namespace App\Training\Tests;


use PHPUnit\Framework\TestCase;

class MyFirstTest extends TestCase
{
    public function testSomethingWeird()
    {
        $a = 2;
        $b = 3;
        $this->assertEquals(5, $a+$b);
    }
}