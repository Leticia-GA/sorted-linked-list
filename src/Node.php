<?php

class Node
{
    private ? Node $next;

    private int $data;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function getNext(): ?Node
    {
        return $this->next;
    }

    public function setNext(?Node $next): void
    {
        $this->next = $next;
    }

    public function getData(): int
    {
        return $this->data;
    }
}