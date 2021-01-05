<?php

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    
    public function testThatWeCanGetTheID(){
        $user = new Project\cinemaworld\new;
        
        $$user->setID('16303005');
        
        $this->assertEquals($$user->getID(),'16303005');
    }
    
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testThatWeCanGetTheUsername(){
        $user = new  Project\cinemaworld\new;
        
        $user->setUsername('AME');
        
        $this->assertEquals($user->getUsername(),'AME');
    }

    public function testThatWeCanGetPhone(){
        $user = new Project\cinemaworld\new;

        $user->setPhone('01010101010');
        
        $this->assertEquals($user->getPhone(),'01010101010');
    }

    public function testThatWeCanGetTheAmount(){
        $user = new  Project\cinemaworld\new;
        
        $user->setAmount('450');
        
        $this->assertEquals($user->getAmount(),'450');
    }

}

