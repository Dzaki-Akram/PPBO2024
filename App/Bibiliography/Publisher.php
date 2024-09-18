<?php

class Publisher {
     public $name;
     public $address;
     public $phone;

     public function __construct($name, $address, $phone) {
         $this->name = $name;
         $this->address = $address;
         $this->phone = $phone;
     }

     public function setPhone($phone) : void {
         $this->phone = $phone;
     }

     public function getPhone() : int {
         return $this->phone;
     }
 }