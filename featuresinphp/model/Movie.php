<?php

declare(strict_types=1);

namespace featuresinphp\model\Gio;

class Movie 
{
    private string $title;
    public function __construct($title)
    {
        $this->$title = $title;
        echo "Constructor called for Movie";        
    }

    public function callTransaction()
    {
        //Doesnt need fully quilfied name because it lies in the same namespace
        new Transaction(666.66, "The devil itself");
    }
}