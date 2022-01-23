<?php

class Queue
{
    public $array;

    public function __construct()
    {
        $this->array = [];
    }

    public function isEmpty()
    {
        return count($this->array) == 0;
    }

    public function enqueue($item)
    {
        $this->array[] = $item;
    }
    public function dequeue()
    {
        if (!$this->isEmpty()){
            array_shift($this->array);
        } else{
            echo "Đã hết";
        }
    }

}

$test = new Queue();
$test->enqueue(1);
$test->enqueue(2);
$test->enqueue(3);
$test->enqueue(4);
$test->dequeue();
$test->dequeue();

echo "<pre>";
print_r($test);