<?php
require(__DIR__ . '/../vendor/autoload.php');
use PHPUnit\Framework\TestCase;

class AltElseTest extends TestCase
{

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElse($obj)
    {
        $this->assertEquals('YES', $obj->ifElse(true));
        $this->assertEquals('NO', $obj->ifElse(false));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElse2($obj)
    {
        $this->assertEquals('YES', $obj->ifElse2(true));
        $this->assertEquals('NO', $obj->ifElse2(false));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElse3($obj)
    {
        $this->assertEquals('YES', $obj->ifElse3(true));
        $this->assertEquals('NO', $obj->ifElse3(false));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElseIf($obj)
    {
        $this->assertEquals('ZERO', $obj->ifElseIf(0));
        $this->assertEquals('ONE', $obj->ifElseIf(1));
        $this->assertEquals('TWO', $obj->ifElseIf(2));
        $this->assertEquals('OTHER', $obj->ifElseIf(3));
        $this->assertEquals('OTHER', $obj->ifElseIf(6));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElseIf2($obj)
    {
        $this->assertEquals('ZERO', $obj->ifElseIf2(0));
        $this->assertEquals('ONE', $obj->ifElseIf2(1));
        $this->assertEquals('TWO', $obj->ifElseIf2(2));
        $this->assertEquals('OTHER', $obj->ifElseIf2(3));
        $this->assertEquals('OTHER', $obj->ifElseIf2(6));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElseIf3($obj)
    {
        $this->assertEquals('ZERO', $obj->ifElseIf3(0));
        $this->assertEquals('ONE', $obj->ifElseIf3(1));
        $this->assertEquals('TWO', $obj->ifElseIf3(2));
        $this->assertEquals('OTHER', $obj->ifElseIf3(3));
        $this->assertEquals('OTHER', $obj->ifElseIf3(6));
    }

    /**
     * 
     * @dataProvider getObjects
     */
    public function testIfElseIf4($obj)
    {
        $this->assertEquals('ZERO', $obj->ifElseIf4(0));
        $this->assertEquals('ONE', $obj->ifElseIf4(1));
        $this->assertEquals('TWO', $obj->ifElseIf4(2));
        $this->assertEquals('OTHER', $obj->ifElseIf4(3));
        $this->assertEquals('OTHER', $obj->ifElseIf4(6));
    }

    public function getObjects()
    {
        return [
            [new Niisan\ReplaceElse\OriginalElse],
            [new Niisan\ReplaceElse\ReplaceElse]
        ];
    }
}