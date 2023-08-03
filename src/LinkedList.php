<?php

class LinkedList
{
    private Node $head;

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
}