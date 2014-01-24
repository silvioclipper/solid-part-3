<?php

require_once __DIR__ . '/../Rectangle.php';
require_once __DIR__ . '/../Square.php';
require_once __DIR__ . '/../Client.php';

class LspTest extends PHPUnit_Framework_TestCase {

	function testRectangleArea() {
		$r = new Rectangle();
		$c = new Client();
		$this->assertTrue($c->areaVerifier($r));
	}

	function testSquareArea() {
		$r = new Square();
		$c = new Client();
		$this->assertTrue($c->areaVerifier($r));
	}

}
 