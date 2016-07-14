<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function setName(string $name)
    {
        $this->setAttribute('name', $name);
    }

    public function setBday($bday)
    {
        $this->setAttribute('bday', $bday);
    }

    public function setAmount(int $amount)
    {
        $this->setAttribute('amount', $amount);
    }

    public function getName() : string
    {
        return $this->getAttribute('name');
    }
    
    public function getBday()
    {
        return $this->getAttribute('bday');
    }
    
    public function getAmount() : int
    {
        return $this->getAttribute('amount');
    }
}
