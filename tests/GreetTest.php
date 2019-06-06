<?php

use Carl\Greet\Greet;
use PHPUnit\Framework\TestCase;

class GreetTest extends TestCase {
    public function testTest() {
        $this->assertSame(2, 1+1);
    }

    public function testGreeting() {
        $name = "Carl";
        $return = Greet::getGreeting($name);
        $this->assertStringContainsString($name, $return);
    }


}
