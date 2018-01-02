<?php
/**
 * Created by PhpStorm.
 * User: marcalberga
 * Date: 2/1/18
 * Time: 23:18
 */

namespace App\Training\Service;


class MathService
{
    /** @var Calculator $calculator */
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * returns the sum of all values in integer array
     *
     * @param int[] $arrayOfValues
     * @return int sum of all values in array
     */
    public function addMultipleValues(array $arrayOfValues): int
    {
        $totalSum = 0;
        foreach ($arrayOfValues as $value) {
            $totalSum = $this->calculator->add($totalSum, $value);
        }

        return $totalSum;
    }
}