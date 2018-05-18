<?php

class About
{
    public  function __construct() {
       
        $this->display();
    }
    
    protected function display()
    {
        echo "<h1> This is display method for about page</h1>";
    }
}

