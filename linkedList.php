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

    //    Insert Last Node
    public function insertLast($data)
    {
        $node = new Node($data);
        $current = null;

        if (!$this->head)
            $this->head = $node;
        else {
            $current = $this->head;

            while ($current->next)
                $current = $current->next;

            $current->next = $node;
        }
        $this->size++;
    }


//    Insert At Index
    public function insertAtIndex($data, $index)
    {
        if ($index > 0 && $index > $this->size) return;

        if ($index === 0) {
            $this->head = new Node($data, $this->head);
            return;
        }

        $node = new Node($data);
        $current = $previous = null;

        $current = $this->head;
        $count = 0;

        while ($count < $index) {
            $previous = $current;
            $count++;
            $current = $current->next;
        }

        $node->next = $current;
        $previous->next = $node;

        $this->size++;
    }

//    Get At Index
    public function getAt($index)
    {
        $current = $this->head;
        $count = 0;

        while ($current) {
            if ($count === $index) {
                echo $current->data;
            }
            $count++;
            $current = $current->next;
        }
    }

    //    Remove At Index
    public function removeAt($index)
    {
        if ($index > 0 && $index > $this->size) return;

        $current = $this->head;
        $previous = null;
        $count = 0;

        if ($index === 0) {
            $this->head = $current->next;
            return;
        } else {
            while ($count < $index) {
                $count++;
                $previous = $current;
                $current = $current->next;
            }

            $previous->next = $current->next;
        }

        $this->size--;
    }

    //    Clear List
    public function clearList()
    {
        $this->head = null;
        $this->size = 0;
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

/* Insert Last*/
$ll->insertLast(300);
$ll->insertLast(400);
/* End*/

/* Insert At Index*/
$ll->insertAtIndex('InsertAtIndex1', 1);
$ll->insertAtIndex('InsertAtIndex5', 5);
/* End*/

/* Get At Index*/
echo "Get At Index : <br>";
$ll->getAt(2);
echo "<br><hr><br>";
/* End */

$ll->printListData();

//$ll->removeAt(5);

//$ll->clearList();


