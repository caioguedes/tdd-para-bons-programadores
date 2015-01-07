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
        $isInteger = $this->isInteger($number);
        $overStartNumber = ($number < $this->startNumber);

        if (!$isInteger || $overStartNumber) {
            return false;
        }

        for ($count = 1; $count <= $number; $count++) {

            if (
                $this->isMultiple(3, $count)
                && $this->isMultiple(5, $count)
            ) {
                $this->fizzbuzz[] = 'fizzbuzz';

            } else if ($this->isMultiple(3, $count)) {
                $this->fizzbuzz[] = 'fizz';

            } else if ($this->isMultiple(5, $count)) {
                $this->fizzbuzz[] = 'buzz';

            } else {
                $this->fizzbuzz[] = $count;
            }
        }

        return $this->fizzbuzz;
    }

    /**
     * Is Multiple
     * @param int $of Multiple of
     * @param int $number Is Multiple?
     * @return bool
     */
    private function isMultiple($of, $number)
    {
        return (($number % $of) == 0);
    }

    /**
     * Is Integer
     * @param mixed $value
     * @return bool
     */
    private function isInteger($value)
    {
        return is_integer($value);
    }
}
