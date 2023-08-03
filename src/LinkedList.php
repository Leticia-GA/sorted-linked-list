<?php

include 'Node.php';

class LinkedList
{
    private ?Node $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function append(int $data): void
    {
        if ($this->head == null) {
            $this->head = new Node($data);

            return;
        }

        $current = $this->head;

        while ($current->getNext() != null) {
            $current = $current->getNext();
        }

        $current->setNext(new Node($data));
    }

    public function get(int $index): ?int
    {
        $current = $this->head;

        for ($i = 0; $i < $index; $i++) {
            if (!$current) {
                return null;
            }

            $current = $current->getNext();
        }

        if (!$current) {
            return null;
        }

        return $current->getData();
    }

    public function __toString(): string
    {
        $current = $this->head;
        $data = '';

        while ($current != null) {
            $data .= $current->getData();

            if ($current->getNext() != null) {
                $data .= ', ';
            }

            $current = $current->getNext();
        }

        return $data;
    }
}