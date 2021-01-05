<?php
namespace Project\cinemaworld\Controller\new;

class User
{
    public $id;
    public $username;
    public $phone;
    public $amount;
    
    
    public function setID($id)
    {
        $this->id = $id;
        
    }
    
    public function getID()
    {
        //return '16303005';
        return $this->id;
        
    }
    
    
    
    public function setUsername($username)
    {
        $this->username = $username;
        
    }
    
    public function getUsername()
    {
        //return 'AME';
        return $this->username;
        
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
        
    }
    
    public function getPhone()
    {
        //return '01010101010';
        return $this->phone;
        
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        
    }
    
    public function getAmount()
    {
        //return '450';
        return $this->amount;
        
    }
}
