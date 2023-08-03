<?php

include 'src/LinkedList.php';
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
}