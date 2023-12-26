<?php


namespace App\classes;


abstract class Teacher
{
    public $a = 10;
    public $b = 10;
    public $result;

    public function add()
    {
        $this->result = $this->a + $this->b;
        return $this->result ;
    }
    public function sub()
    {
        $this->result = $this->a - $this->b;
    }
    public function div()
    {
        $this->result = $this->a / $this->b;
    }
    //we can not give body when abstract declare in abstract class er method e
    public abstract function bitm();
}