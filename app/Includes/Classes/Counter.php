<?php

namespace App\Includes\Classes;

class Counter implements InterfaceCounter{
    protected $counter; 
    
    public function __construct() {
        $this->counter = 0;
    }
    
    public function count() {
        return $this->counter++;
    }
      public function get_value () {
        return $this->counter;
    }
}
