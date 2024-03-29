<?php

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
  
  The widely used recommendation is to name your class the same as the filename with php extension. A single class per file is recommended.
  Create an object(instance) with keyword new
    
  PHP har a generic class implementation called stdClass that you can use to create generic objects or you could cast you variable. Works like a generic simple class when no class i defined
  Anonymous classes  
  Constructor property promotion php >= 8
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

    //Belong to the class
    public static int $count;

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
    private string $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);  //Call base class
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
//echo "<br>" . User::descriptionRulesForUser() . "<br>";

//custom objects - JS warning...
/*
$objtemp = new \stdClass();

$objtemp->middlename = "Mikael";
$objtemp->xxx = 666;
echo "Creating public properties at runtime...<br>";
var_dump($objtemp);
echo "Done Creating public properites at runtime...<br>";
echo "Acces a newly created property" . $objtemp->xxx . "<br>";
*/

# stdClass
$myPerson = new stdClass();
$myPerson->firstName = "John";
$myPerson->lastName = "Andersson";
$myPerson->age = 67;

# echo "FirstName= " . $myPerson->firstName . ", Lastname=" . $myPerson->lastName . ", age=" . $myPerson->age ."<br>";


//Encoded json object
$myPersonEncoded = json_encode($myPerson);     // ->  "{"firstName":"John","lastName":"Andersson","age":67}"


//Convert into an associate array
$myPersonArray = json_decode($myPersonEncoded, true);     //->    Array ( [firstName] => John [lastName] => Andersson [age] => 67 )
//A stdClass array
//$myPersonArray = json_decode($myPersonEncoded);             //->    Class Object ( [firstName] => John [lastName] => Andersson [age] => 67 )
#var_dump($myPersonArray);            
#echo "<br><br>";


$str = '{"one":1, "two": 2, "three": 3}';           //Like an intermediate format
$assoc = json_decode($str, true);                   //Associate array   ->   array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) } 
#var_dump($assoc);
#echo "<br>";
$arr = json_decode($str,false);                     //stdClass ->    object(stdClass)#2 (3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) } 
#var_dump($arr);
#echo "<br><br>";

//Back to original stdClass
$copyPerson = (object)$assoc;
#var_dump($copyPerson);
#echo $copyPerson->one . " comes before " . $copyPerson->{"two"} . " !!!";       //Both are valid be latter is more confusing

$jsonContentComplex = '{
    "people": [
      {
        "id": 1,
        "name": "John Doe",
        "age": 30,
        "email": "john.doe@example.com",
        "address": {
          "street": "123 Main Street",
          "city": "New York",
          "country": "USA"
        },
        "hobbies": ["Reading", "Traveling"]
      },
      {
        "id": 2,
        "name": "Alice Smith",
        "age": 25,
        "email": "alice.smith@example.com",
        "address": {
          "street": "456 Elm Avenue",
          "city": "Los Angeles",
          "country": "USA"
        },
        "hobbies": ["Painting", "Hiking", "Cooking"]
      }
    ]
  }';
  
  $associateArrayComplex = json_decode($jsonContentComplex, true);

// echo '<pre>';
// print_r( $associateArrayComplex);
// echo '</pre>';

// echo $associateArrayComplex["people"][0]["email"];


//ANONYMOUS Classes (classes with no names). PHP automatically actually creates a name for the class :D (PS Type hinting is not an option ofcource)
//Possible to use class inside a class, nested
//Work the same as an regular class
$anonObj = new class("Daniel", 43, true) {

  private string $name;
  private int $age;
  private bool $male;
  public function __construct(string $pName, int $pAge, bool $pMale)
  {
    $this->name = $pName;
    $this->age = $pAge;
    $this->age = $pMale;
  }

  public function getName():string
  {
    return $this->name;
  }
 
};

echo "Name is=" . $anonObj->getName();


//CONSTRUCTOR PROPERTY PROMOTION
class CustomerCPR
{
  public function __construct(
    public string $name, 
    public string $email, 
    public DateTimeImmutable $birth_date,
) {}
}

#is  equivalent to
/*
class CustomerCPR
{
  public string $name;
  public string $email;
  public DateTimeImmutable $birth_date;

  public function __construct(string $name, string $email,  DateTimeImmutable $birth_date)
  {
      $this->name = $name;
      $this->email = $email;
      $this->birth_date = $birth_date;
  }
}
*/