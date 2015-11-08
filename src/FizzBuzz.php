<?php

/**
 * Fizz Buzz Game Class
 */
class FizzBuzz
{
    /** @var integer $startNumber Play Start Number */
    public $startNumber = 1;

    /** @var array $fizzbuzz Storage FizzBuzz Sequence */
    public $fizzbuzz = [];

    /**
     * Play.
     *
     * @param int $number Start Number
     * @return array
     */
    public function play($number)
    {
        $isInteger = Number::isInteger($number);
        $overStartNumber = ($number < $this->startNumber);

        if (!$isInteger || $overStartNumber) {
            throw new InvalidArgumentException;
        }

        for ($count = 1; $count <= $number; $count++) {

            if ($this->isFizzBuzz($count)) {
                $this->fizzbuzz[] = 'fizzbuzz';

            } else if ($this->isFizz($count)) {
                $this->fizzbuzz[] = 'fizz';

            } else if ($this->isBuzz($count)) {
                $this->fizzbuzz[] = 'buzz';

            } else {
                $this->fizzbuzz[] = $count;
            }
        }

        return $this->fizzbuzz;
    }

    /**
     * Verify if is Fizz number.
     *
     * @param integer $number Number
     * @return boolean
     */
    public function isFizz($number)
    {
        return (Number::isMultiple(3, $number) === true);
    }

    /**
     * Verify if is Buzz number.
     *
     * @param integer $number Number
     * @return boolean
     */
    public function isBuzz($number)
    {
        return (Number::isMultiple(5, $number) === true);
    }

    /**
     * Verify if is Fizz and Buzz Number.
     *
     * @param integer $number Number
     * @return boolean
     */
    public function isFizzBuzz($number)
    {
        return ($this->isFizz($number) && $this->isBuzz($number) === true);
    }
}
