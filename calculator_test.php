<?php
require_once 'Calculator.php';
class CalculatorTest extends PHPUnit\Framework\TestCase
{
	public function testAdd()
	{
		$c = New Calculator;
		$result = $c->add(5,10);
		$this->assertEquals(15,$result);
	}

	public function testSubstract()
	{
		$c = New Calculator;
		$result = $c->subtract(15,10);
		$this->assertEquals(5,$result);
	}

}


