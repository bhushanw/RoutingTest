<?php

class Home
{
    public  function __construct() {
       
        $this->homePage();
    }
    
    protected function homePage()
    {
        echo "<h1> This is homePage method for Home page</h1>";
    }
}

