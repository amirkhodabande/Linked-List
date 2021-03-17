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

    //    Insert First Node
    public function insertFirst($data)
    {
        $this->head = new Node($data, $this->head);
        $this->size++;
    }

    //    Print List Data
    public function printListData()
    {
        $current = $this->head;
        while ($current) {
            echo $current->data . "<br>";
            $current = $current->next;
        }
    }

}

$ll = new linkedList();

/* Insert First*/
$ll->insertFirst(100);
$ll->insertFirst(200);
/* End*/

$ll->printListData();


