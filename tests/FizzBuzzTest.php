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
}

