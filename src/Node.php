<?php

class Node
{
    public Node $next;

    private int $data;

    public function __construct(int $data)
    {
        $this->data = $data;
    }
}