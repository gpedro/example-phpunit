<?php
	class CoffeeTest extends PHPUnit_Framework_TestCase {

		public function testCoffeeIsNotEmpty() {
			$coffee = new Coffee();
			$coffee->refill();
			$this->assertFalse($coffee->isEmpty());
		}

		public function testCoffeeIsEmpty() {
			$coffee = new Coffee();
			$coffee->drink();
			$this->assertTrue($coffee->isEmpty());
		}

		public function testCoffeeCanDrink() {
			$coffee = new Coffee();
			$this->assertFalse($coffee->isEmpty());
			$this->assertTrue($coffee->drink());
		}

	}