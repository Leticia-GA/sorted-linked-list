<?php

include(dirname(__DIR__).'/src/LinkedList.php');
use PHPUnit\Framework\TestCase;

final class LinkedListTest extends TestCase
{
    public function testToStringMethod()
    {
        $linkedList = new LinkedList();

        $linkedList->append(3);
        $linkedList->append(5);
        $linkedList->append(7);

        $this->assertEquals("3, 5, 7", $linkedList->__toString());
    }

    public function testGetMethod()
    {
        $linkedList = new LinkedList();

        $linkedList->append(3);
        $linkedList->append(5);
        $linkedList->append(9);
        $linkedList->append(7);

        $this->assertEquals(3, $linkedList->get(0));
        $this->assertEquals(9, $linkedList->get(2));
        $this->assertNull($linkedList->get(9));
    }

    public function testLengthMethod()
    {
        $linkedList = new LinkedList();

        $linkedList->append(3);

        $this->assertEquals(1, $linkedList->length());
    }

    public function testContainsMethod()
    {
        $linkedList = new LinkedList();

        $linkedList->append(3);
        $linkedList->append(5);
        $linkedList->append(7);

        $this->assertTrue($linkedList->contains(5));
        $this->assertFalse($linkedList->contains(2));
    }
}