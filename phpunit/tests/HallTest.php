<?php

use PHPUnit\Framework\TestCase;


class HallTest extends TestCase
{
    
    public function testThatWeCanGetTheHallID(){
        $hall = new Project\cinemaworld\new;
        
        $hall->setHallID('123');
        
        $this->assertEquals($hall->getHallID(),'123');
    }
    
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testThatWeCanGetTheHallName(){
        $hall = new  Project\cinemaworld\new;
        
        $hall->setHallName('Babushka');
        
        $this->assertEquals($hall->getHallName(),'Babushka');
    }

    public function testThatWeCanGetTheMovieName(){
        $hall = new Project\cinemaworld\new;
        $hall->setMovieName('Godfather');
        
        $this->assertEquals($hall->getMovieName(),'Godfather');
    }
}

