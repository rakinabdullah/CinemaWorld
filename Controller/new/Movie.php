<?php
namespace Project\cinemaworld\Controller\new;

class Movie
{
    public $movie_name;
    public $time;
    public $date;
    public $price;
    
    
    public function setMovieName($movie_name)
    {
        $this->movie_name = $movie_name;
        
    }
    
    public function getMovieName()
    {
        //return 'godfather';
        return $this->movie_name;
        
    }
    
    
    
    public function setTime($time)
    {
        $this->time = $time;
        
    }
    
    public function getTime()
    {
        //return '5';
        return $this->time;
        
    }
    
    public function setDate($date)
    {
        $this->date = $date;
        
    }
    
    public function getDate()
    {
        //return '05/23/2015';
        return $this->date;
        
    }

    public function setPrice($price)
    {
        $this->price = $price;
        
    }
    
    public function getPrice()
    {
        //return '250';
        return $this->price;
        
    }
}
