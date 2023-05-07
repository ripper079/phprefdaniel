<?php
//enforce strict typing in PHP functions
declare(strict_types = 1); 

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //For encapsulation of an object!
    private string $_firstName;
    private string $_lastName;
    private int $_age;

    //Aka contructor, initialize object with valid values
    public function __construct(string $firstName, string $lastName, int $age) {        
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_age = $age;
    }
    
    public function __toString(): string {
        return "FirstName=" . $this->_firstName . " LastName=" . $this->_lastName . " Age=" . $this->_age;
        //return "test";
    }

    public function setFirstName(string $firstName): void {
        $this->_firstName = $firstName;
    }

    public function getFirstName(): string {
        return $this->_firstName;
    }

    public function setLastName(string $lastName): void {
        $this->_lastName = $lastName;
    }

    public function getLastName(): string {
        return $this->_lastName;
    }

    public function setAge(int $age): void {
        $this->_age = $age;
    }

    public function getAge(): int {
        return $this->_age;
    }

    // public function __toArray(): array 
    // {
    //     $arrayOfProperties = [];
    //     $arrayOfObject = get_object_vars($this);
    //     foreach($arrayOfObject as $property => $value)
    //     {
    //         echo "<h3>$property | $value<br>";
    //     }

    //     return $arrayOfProperties;
    // }

    public function toArray() {
        return get_object_vars($this);
    }

    public function toJson(): string {
        return [
            '_firstName' => $this._firstName,
            '_lastName' => $this->_lastName,
            '_age' => $this->_age
        ];
    }    

}

$superCars=['Lamborgini', 'Ferrari', 'Könisegg'];
//Instantiate an object
$aUser = new User('Daniel', 'Oikarainen', 43);
echo $aUser->getFirstName() . "<br>";
echo $aUser . "<br>";

$arrayOfAPersonProperties = $aUser->toArray();

echo "<br><br>";
print_r($superCars);
echo "<br><br>";
print_r($arrayOfAPersonProperties);
echo "<br>";
echo "<h1>Var dump an array</h1>";
var_dump($superCars);
echo "<br>";
var_dump($arrayOfAPersonProperties);
?>
