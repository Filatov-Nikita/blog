<?php

namespace App\Includes\Classes;

class Counter_1 implements InterfaceCounter{
    protected $counter; 
    
    public function __construct() {
        $this->counter = 0;
    }
    
    public function count() {
        return $this->counter+=2;
    }
      public function get_value () {
        return $this->counter;
    }
}
