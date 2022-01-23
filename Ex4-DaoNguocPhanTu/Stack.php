<?php

class Stack
{

    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($item)
    {
        $this->stack[] = $item;
    }

    public function reverse()
    {
        return array_reverse($this->stack);
    }

}

$test = new Stack();
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);

var_dump($test->reverse());