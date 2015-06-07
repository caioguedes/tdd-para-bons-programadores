<?php

class Number
{
    /**
     * Is Multiple
     * @param int $of Multiple of
     * @param int $number Is Multiple?
     * @return bool
     */
    public static function isMultiple($of, $number)
    {
        return (($number % $of) == 0);
    }

    /**
     * Is Integer
     * @param mixed $value
     * @return bool
     */
    public static function isInteger($value)
    {
        return is_integer($value);
    }
}
