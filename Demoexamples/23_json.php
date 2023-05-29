<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$str = '{
    "a" : 1,
    "b" : 2,
    "c" : 3
}';




function DemoSerializeAndDeserilize()
{
    //Serialization - From object to format that can be stored/transmitted
    //The object
    $myBrother = new Person("Dennis", 34);

    //Serialize the object
    $serializedData = serialize($myBrother);

    //Store it or transmit
    echo $serializedData;

    $deserializedObj = unserialize($serializedData);

    // Access the properties of the deserialized object
    echo $deserializedObj->name; // Output: John Doe
    echo $deserializedObj->age; // Output: 25
}

// https://www.php.net/manual/en/ref.json.php
function DemoSingleJson()
{
    $car = [
        "name" => "Toyota",
        "model" => "Avensis",
        "color" => "metalic",
        "doors" => 4,
        "turbo" => false
    ];

    $jsonEncodedCar = json_encode($car);    //{"name":"Toyota","model":"Avensis","color":"metalic","doors":4,"turbo":false}

    //Dont work
    //echo $car;
    //echo $jsonEncodedCar;

    //Save to a file - parameter 1 the filename AND parameter 2 the content
    file_put_contents('mycar.json', $jsonEncodedCar);

    //Fetch data from file
    $jsonDataFromFile = file_get_contents('mycar.json');            //Will have the same content as $jsonEncodedCar, in this case
    echo $jsonDataFromFile;
    //If you dont pass the true flag it will return a array of stdClass
    /*
    $associativeArrayCarsstdClass = json_decode($jsonDataFromFile);         //Will have the same content as $car
    var_dump($associativeArrayCarsstdClass);
    */
    $associativeArrayCars = json_decode($jsonDataFromFile, true);         //Will have the same content as $car
    var_dump($associativeArrayCars);


    //--------------------------------------------------------------------------------------------
    $names = ['Daniel', 'Dennis', 'Jenny'];
    //Convert to an json file with indexed keys
    $jsonNames = json_encode($names, JSON_FORCE_OBJECT);
    //echo $jsonNames;                        //{"0":"Daniel","1":"Dennis","2":"Jenny"}
    $associativeArrayFromNames = json_decode($jsonNames, true);

    //var_dump($associativeArrayFromNames);
}




/*
//An assocative array
$arrAssociative = json_decode($str, true);
var_dump($arrAssociative);
echo "<br>[assocative array]Content for key \"a\"=" . $arrAssociative["a"] . "<br>";


//stdClass insteed here
$arrStdClass = json_decode($str);
var_dump($arrStdClass);
echo "<br>[arrStdClass]Content for key \"a\"=" . $arrStdClass->a . "<br>";
*/



//DemoSerializeAndDeserilize();
DemoSingleJson();
