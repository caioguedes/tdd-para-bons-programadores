<?php

class NumberTest extends PHPUnit_Framework_TestCase
{
	public function testIsMultipleMethod()
	{
		$number = new Number;
		$this->assertTrue($number->isMultiple(3, 15));
		$this->assertFalse($number->isMultiple(2, 15));
		$this->assertTrue($number->isMultiple(2, 100));
		$this->assertFalse($number->isMultiple(3, 100));
	}

	public function testIsIntegerMethod()
	{
		$number = new Number;
		$this->assertTrue($number->isInteger(1));
		$this->assertFalse($number->isInteger(1.0));
		$this->assertFalse($number->isInteger(0.1));
		$this->assertFalse($number->isInteger(true));
	}
}