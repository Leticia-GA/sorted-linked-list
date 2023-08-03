<?php

include 'Node.php';

class LinkedList
{
    private ?Node $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function append(int $data)
    {
        if ($this->head == null) {
            $this->head = new Node($data);

            return;
        }

        $current = $this->head;

        while ($current->next != null) {
            $current = $current->next;
        }

        $current->next = new Node($data);
    }

    public function __toString()
    {
        $current = $this->head;
        $data = '';

        while ($current != null) {
            $data .= $current->getData();

            if ($current->next != null) {
                $data .= ', ';
            }

            $current = $current->next;
        }

        return $data;
    }
}