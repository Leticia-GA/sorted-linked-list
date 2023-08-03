<?php

class Node
{
    public ? Node $next;

    private int $data;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function getData(): int
    {
        return $this->data;
    }
}