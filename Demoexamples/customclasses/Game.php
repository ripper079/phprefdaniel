<?php

declare(strict_types=1);


class Game
{
    //These should be private but enables easier visualization of var_dump()
    public string $name;
    public int $releaseYear;
    public string $exectiveOwner;
    public string $id;
    // private string $name;
    // private int $releaseYear;
    // private string $id;
    // private string $exectiveOwner;



    //CONSTRUCTOR
    public function __construct(string $name='defaultgame', int $releaseYear=0, string $pExectiveOwner='copyleftowner')
    {
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->exectiveOwner = $pExectiveOwner;
        $this->id = uniqid('carvinid');
        #echo "<br>Constructor called for game=" . $this->name . " of class "  . static::class . "<br>";
    }
    //CLONING
    public function __clone(): void
    {
        #echo "<br>Clone magic method is called for game=" . $this->name . " of class "  . static::class . "<br>";
        $this->id = uniqid('carvinid');
    }
    //DESTRUCTOR
    public function __destruct()
    {
        #echo "<br>DE-Constructor called for game=" . $this->name . " of class "  . static::class . "<br>";
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

    //Custom serialization Part - 4 related magic methods
    //Called BEFORE the serialization happens. Returns an array of the properties that only should be serialized
    //But these 2 below are ignored if __serialize and __unserialize is defined
    // public function __sleep(): array
    // {
    //     echo "<br>Hit on sleep method<br>";
    //     return ['name', 'releaseYear'];
    // }

    // //Called AFTER the serialization happens
    // public function __wakeup(): void
    // {
    //     //TODO:
    // }

    //Returns an array that should be presented. E.i you want to get an associative array
    //The 2 below function work in pair!!!
    public function __serialize(): array
    {

        return [
            'id' => base64_encode($this->id),                   //Here maybe some encryption
            'name' => $this->name,                              //Same property name
            'yearMoveReleased' => $this->releaseYear,           //Different property name
            'exectiveOwner' => $this->exectiveOwner,            //Same property name
            'foo' => 'drunkenkid'                               //Even add some properties
        ];
    }
    //parameter $data -  the data that is serialized (usually some reflection of the array that __serialize return)
    public function __unserialize(array $data): void
    {
        $this->id = base64_decode($data['id']);
        $this->name = $data['name'];
        $this->releaseYear = $data['yearMoveReleased'];
        $this->exectiveOwner = $data['exectiveOwner'];

    }
}
