<?php

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.

  PHP har a generic class implementation called stdClass that you can use to create generic objects or you could cast you variable. Works like a base class when no class i defined

  The widle used recommendation is to name your class the same as the filename with php extension. A single class per file is recommended.
  Create an object(instance) with keyword new

  P.S Remember that this file is an example file!
*/

class User
{
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes

    //The string portion is optional and called type hinting and usually this is used with declare(strict_types=1)
    private string $name;
    public $email;
    public $password;

    //Actually a constant
    public const MAX_USER = 20;

    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password)
    {
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo "Constructor called...for class<br>";
    }

    //Static functions
    public static function descriptionRulesForUser()
    {
        return "Dont break our policies and we all will be happy<br>";
    }


    // Methods are functions that belong to a class.
    // function setName() {
    //   $this->name = $name;
    // }

    public function getName()
    {
        return $this->name;
    }

    public function login()
    {
        return "User $this->name is logged in.<br>";
    }

    // Destructor is called when an object is destroyed or the end of the script.
    public function __destruct()
    {
        echo "Destructor called...";
        echo "for the user name is {$this->name}.<br>";
    }
}
// Instantiate a new user
//$user1 = new User('Daniel', 'daniel@oikiarainen.se', '123456');
//Call member function
// echo $user1->getName();
// echo $user1->login();

// Add a value to a property
// $user1->name = 'ripper079';

//var_dump($user1);
// echo $user1->name;

// if ($user1 instanceof User) {
//     echo "Yes $user1->email <br>";
// }


/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

//$employee1 = new employee('John', 'johndoe@gmail.com', '123456', 'Manager');
//echo $employee1->getTitle();
//Static call
echo "<br>" . User::descriptionRulesForUser() . "<br>";

//custom objects - JS warning...
$objtemp = new \stdClass();

$objtemp->middlename = "Mikael";
$objtemp->xxx = 666;
echo "Creating public properties at runtime...<br>";
var_dump($objtemp);
echo "Done Creating public properites at runtime...<br>";
echo "Acces a newly created property" . $objtemp->xxx . "<br>";
