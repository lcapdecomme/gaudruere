<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-04-17 at 09:53:29.
 */
 
require __DIR__ . '/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Calculator::add
     * @todo   Implement testAdd().
     */
    public function testAdd()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Calculator::add1
     */
    public function testAdd1()
    {
        // Remove the following lines when you implement this test.
        //$this->markTestIncomplete('This test has not been implemented yet.');
        $c = new Calculator;
		$this->assertEquals(7,$c->add(5,2));
    }
	
    /**
     * @covers Calculator::add2
     * @todo   Implement testAdd().
     */
    public function testAdd2()
    {
        // Remove the following lines when you implement this test.
        //$this->markTestIncomplete('This test has not been implemented yet.');
        $c = new Calculator;
		$this->assertNotEquals(0,$c->add(5,2));
    }
}
