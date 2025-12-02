<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testHelloWorld()
    {
        $expected = 'Hello World';
        $actual = 'Hello World';
        $this->assertEquals($expected, $actual);
    }

    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}
