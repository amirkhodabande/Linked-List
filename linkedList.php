<?php

class Node
{
    public $data;
    public $next;

    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}

class linkedList
{
    public $size;
    public $head;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

}


