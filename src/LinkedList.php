<?php

include 'Node.php';

class LinkedList
{
    private ?Node $head;

    private int $length;

    public function __construct()
    {
        $this->head = null;
        $this->length = 1;
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
        $this->setLength($this->getLength() + 1);
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

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    public function length(): int
    {
        return $this->getLength();
    }

    public function contains(int $value): bool
    {
        if ($this->head == null) {
            return false;
        }

        $current = $this->head;

        while ($current->getNext() != null) {
            if ($current->getData() === $value) {
                return true;
            }

            $current = $current->getNext();
        }

        return false;
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