<?php

namespace vn\aptech;

class Student
{
    //use Calculate;
    //public $id;
    //magic function __set
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    function __destruct()
    {
        
    }
}