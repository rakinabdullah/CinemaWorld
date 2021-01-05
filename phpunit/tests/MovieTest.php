<?php

use PHPUnit\Framework\TestCase;


class MovieTest extends TestCase
{
    
    public function testThatWeCanGetTheMovieName(){
        $movie = new Project\cinemaworld\new;
        
        $movie->setMovieName('godfather');
        
        $this->assertEquals($movie->getMovieName(),'godfather');
    }
    
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testThatWeCanGetTheTime(){
        $movie = new  Project\cinemaworld\new;
        
        $movie->setTime('5');
        
        $this->assertEquals($movie->getTime(),'5');
    }

    public function testThatWeCanGetTheDate(){
        $movie = new Project\cinemaworld\new;

        $movie->setDate('05/23/2015');
        
        $this->assertEquals($movie->getDate(),'05/23/2015');
    }

    public function testThatWeCanGetThePrice(){
        $movie = new  Project\cinemaworld\new;
        
        $movie->setPrice('250');
        
        $this->assertEquals($movie->getPrice(),'250');
    }

}

