<?php
namespace Project\cinemaworld\Controller\new;

class Hall
{
    public $hall_id;
    public $hall_name;
    public $movie_name;
    
    public function setHallID($hall_id)
    {
        $this->hall_id = $hall_id;
        
    }
    
    public function getHallID()
    {
        //return '123';
        return $this->hall_id;
        
    }
    
    
    
    public function setHallName($hall_name)
    {
        $this->hall_name = $hall_name;
        
    }
    
    public function getHallName()
    {
        //return 'Babushka';
        return $this->hall_name;
        
    }
    
    public function setMovieName($movie_name)
    {
        $this->movie_name = $movie_name;
        
    }
    
    public function getMovieName()
    {
        //return 'godfather';
        return $this->movie_name;
        
    }
}
