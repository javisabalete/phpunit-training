<?php
/**
 * Created by PhpStorm.
 * User: marcalberga
 * Date: 2/1/18
 * Time: 22:46
 */

namespace App\Training\Service;


class Calculator
{
    /**
     * Sum of two integer values.
     *
     * @param int $a
     * @param int $b
     * @return int Sum of $a and $b
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}