<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push($item)
    {
        if (!$this->isFull()) {
            array_unshift($this->stack,$item);
        } else {
            echo 'Đã đầy';
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_shift($this->stack);
        } else{
            echo "Hết rồi còn đâu";
        }

    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return $this->stack == 0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

}

$test = new Stack(5);
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);
$test->pop();
$test->pop();
$test->pop();
$test->push(6);
$test->push(7);
echo "<pre>";
print_r($test);
$test->pop();
$test->pop();
$test->pop();
$test->pop();

echo "<pre>";
print_r($test);