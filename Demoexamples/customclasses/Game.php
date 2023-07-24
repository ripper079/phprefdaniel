<?php

declare(strict_types=1);


class Game
{
    private string $name;
    private int $releaseYear;
    private string $id;
    private string $exectiveOwner;
    //CONSTRUCTOR
    public function __construct(string $name='', int $releaseYear=0, string $pExectiveOwner='')
    {
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->exectiveOwner = $pExectiveOwner;
        $this->id = uniqid('carvinid');
        echo "<br>Constructor called for game=" . $this->name . " of class "  . static::class . "<br>";
    }
    //CLONING
    public function __clone(): void
    {
        echo "<br>Clone magic method is called for game=" . $this->name . " of class "  . static::class . "<br>";
        $this->id = uniqid('carvinid');
    }
    //DESTRUCTOR
    public function __destruct()
    {
        echo "<br>DE-Constructor called for game=" . $this->name . " of class "  . static::class . "<br>";
    }
    //A STATIC function that creates an instance of this class
    public static function create(): static
    {
        return new static();
    }

    public function setExectiveOwner(string $exectiveOwner): void
    {
        $this->exectiveOwner = $exectiveOwner;
    }

    public function getExectiveOwner(): string
    {
        return $this->exectiveOwner;
    }

    public function getIdString(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }


}
