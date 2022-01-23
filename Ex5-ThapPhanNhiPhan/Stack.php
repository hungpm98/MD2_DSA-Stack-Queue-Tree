<?php

class Stack
{
    private $stacks;
    private $limit;

    public function __construct($limit = 100)
    {
        $this->limit = $limit;
        $this->stacks = [];
    }

    public function push($item)
    {
        if (!$this->isFull()) {
            $this->stacks[] = $item;
        } else {
            echo "Day roi";
        }
    }
    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->stacks);
        }
    }

    public function top()
    {
        if(!$this->isEmpty()){
            $item = $this->stacks[count($this->stacks) - 1];
            return $item;
        }
    }

    public function isEmpty()
    {
        return count($this->stacks) == 0;
    }

    public function isFull()
    {
        return count($this->stacks) >= $this->limit;
    }

    public function getStacks()
    {
        $arr=[];
        $count =count($this->stacks);
        for ($i = 0; $i < $count; $i++) {
            $arr[$i]=$this->top();
            $this->pop();
        }
        return $arr;
    }

}


function convert($number)
{
    $phanDu = $number % 2;
    $thuong = floor($number / 2);
    $stack = new Stack();
    while ($thuong > 0) {
        $stack->push($phanDu);
        $phanDu = $thuong % 2;
        $thuong = floor($thuong / 2);
        if ($thuong==0){
            $stack->push(1);
        }
    }
    return implode($stack->getStacks()) ;
}
echo convert(6);