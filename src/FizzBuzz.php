<?php

/**
 * Fizz Buzz Game Class
 */
class FizzBuzz
{
    public $startNumber = 1;
    public $fizzbuzz = [];

    /**
     * Play
     * @param int $number Start Number
     * @return array
     */
    public function play($number)
    {
        $isInteger = Number::isInteger($number);
        $overStartNumber = ($number < $this->startNumber);

        if (!$isInteger || $overStartNumber) {
            return false;
        }

        for ($count = 1; $count <= $number; $count++) {

            if (
               Number::isMultiple(3, $count)
               && Number::isMultiple(5, $count)
            ) {
                $this->fizzbuzz[] = 'fizzbuzz';

            } else if (Number::isMultiple(3, $count)) {
                $this->fizzbuzz[] = 'fizz';

            } else if (Number::isMultiple(5, $count)) {
                $this->fizzbuzz[] = 'buzz';

            } else {
                $this->fizzbuzz[] = $count;
            }
        }

        return $this->fizzbuzz;
    }

    public function isFizz($number)
    {
        return (Number::isMultiple(3, $number) === true);
    }

    public function isBuzz($number)
    {
        return (Number::isMultiple(5, $number) == true);
    }
}
