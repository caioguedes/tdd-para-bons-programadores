<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->fb = new FizzBuzz;
    }

    public function testPlayStartWith0OrLess()
    {
        $this->assertFalse($this->fb->play(0));
        $this->assertFalse($this->fb->play(-30));
    }

    public function testMultiples3ReturnFizz()
    {
        $this->assertEquals(
            [1,2,'fizz'],
            $this->fb->play(3)
        );
    }

    public function testPlayStartWith30()
    {
        $this->assertEquals(
            [1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz',
            'buzz', 11, 'fizz', 13, 14, 'fizzbuzz', 16, 17,
            'fizz', 19, 'buzz', 'fizz', 22, 23, 'fizz', 'buzz',
            26, 'fizz', 28, 29, 'fizzbuzz'],
            $this->fb->play(30)
        );
    }

    public function testPlayStartWith60()
    {
        $this->assertEquals(
            [1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz',
            'buzz', 11, 'fizz', 13, 14, 'fizzbuzz', 16, 17,
            'fizz', 19, 'buzz', 'fizz', 22, 23, 'fizz', 'buzz',
            26, 'fizz', 28, 29, 'fizzbuzz', 31, 32, 'fizz',
            34, 'buzz', 'fizz', 37, 38, 'fizz', 'buzz', 41,
            'fizz', 43, 44, 'fizzbuzz', 46, 47, 'fizz', 49, 'buzz',
            'fizz', 52, 53, 'fizz', 'buzz', 56, 'fizz', 58, 59, 'fizzbuzz'],
            $this->fb->play(60)
        );
    }

    public function testMultiples5ReturnBuzz()
    {
        $this->assertEquals(
            [1, 2, 'fizz', 4, 'buzz', 'fizz', 7,
            8, 'fizz', 'buzz'],
            $this->fb->play(10)
        );
    }

    public function testMultiples3And5ReturnFizzBuzz()
    {
        $this->assertEquals(
            [1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz',
            'buzz', 11, 'fizz', 13, 14, 'fizzbuzz', 16],
            $this->fb->play(16)
        );
    }

    public function testIsInteger()
    {
        $this->assertFalse(
            $this->fb->play('bug')
        );

        $this->assertEquals(
            [1], $this->fb->play(1)
        );
    }

    /**
     * @dataProvider fizzNumbersProvider
     */
    public function testIsFizz($number, $expected)
    {
        $this->assertEquals($expected, $this->fb->isFizz($number));
    }

    public function fizzNumbersProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true],
            [7, false],
            [8, false],
            [9, true],
            [10, false],
            [11, false],
            [12, true],
            [13, false],
            [14, false],
            [15, true]
        ];
    }

    /**
     * @dataProvider buzzNumbersProvider
     */
    public function testIsBuzz($number, $expected)
    {
        $this->assertEquals($expected, $this->fb->isBuzz($number));
    }

    public function buzzNumbersProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, true],
            [6, false],
            [7, false],
            [8, false],
            [9, false],
            [10, true],
            [11, false],
            [12, false],
            [13, false],
            [14, false],
            [15, true]
        ];
    }

    /**
     * @dataProvider fizzBuzzNumbersProvider
     */
    public function testIsFizzBuzz($number, $expected)
    {
        $this->assertEquals($expected, $this->fb->isFizzBuzz($number));
    }

    public function fizzBuzzNumbersProvider()
    {
        return [
            [1, false],
            [60, true],
            [3, false],
            [5, false],
            [9, false],
            [15, true],
            [45, true],
            [30, true],
            [10, false],
            [11, false],
            [12, false]
        ];
    }
}

