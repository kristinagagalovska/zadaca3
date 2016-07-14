<?php

namespace App\Commands;

class AddUserCommand
{
    public function __construct($name, $bday, $amount)
    {
        $this->name = $name;
        $this->bday = $bday;
        $this->amount = $amount;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getBday()
    {
        return $this->bday;
    }
    
    public function getAmount()
    {
        return $this->amount;
    }
}