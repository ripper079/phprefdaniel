<?php

//The endopoint for the api look like this
// "https://swapi.dev/api/people/1/"


function display_pretty($pArrayToDislay)
{
    echo "<pre>";
    print_r($pArrayToDislay);
    echo "</pre>";
}


$baseUrl = "https://swapi.dev/api/";
//These could be used as standalone
//$routePath = "people";
//$endPoint = $baseUrl . $routePath;


//This will return one instance
function display_Luke_skywalker()
{
    global $baseUrl;        //This is needed for access to global variable
    $routePath = "people/1";
    $endPoint = $baseUrl . $routePath;

    //This rest call is the most simple of them all - return an json string (a text representation of data structures in JSON)
    $responseFromAPIService = file_get_contents($endPoint);

    //Convert it to "correct" PHP form, Two options. stdClass or Associative array
    //1. stdClass
    $responseObject = json_decode($responseFromAPIService, false);
    //2 . Associative array
    $responsePhpArray = json_decode($responseFromAPIService, true);

    //display_pretty($responseObject);

    echo "Name is: " . $responseObject->name . ". This info extraced with stdClass<br>";
    echo "Name is: " . $responsePhpArray['name'] . ". This info extraced with associative array";

}

//No support for pagination
function display_all_character_on_page()
{
    global $baseUrl;        //This is needed for access to global variable
    $routePath = "people";
    $endPoint = $baseUrl . $routePath;

    //This rest call is the most simple of them all - return an json string (a text representation of data structures in JSON)
    $responseFromAPIService = file_get_contents($endPoint);

    //Convert it to "correct" PHP form, Two options. stdClass or Associative array
    //1. stdClass
    $responseObject = json_decode($responseFromAPIService, false);
    //2 . Associative array
    //$responsePhpArray = json_decode($responseFromAPIService, true);

    $listOfStarWarsPersons = $responseObject->results;

    foreach($listOfStarWarsPersons as $oneStarWarsPerson)
    {
        echo "Current name is: " . $oneStarWarsPerson->name . " which har hair color: " . $oneStarWarsPerson->hair_color . "<br>";
    }

    echo "<br>Done fetching<br>";


    //display_pretty($responseObject);          //For getting insight about the structure of the json file
}

// Support for pagination
function display_all_character_all_pages()
{
    global $baseUrl;        //This is needed for access to global variable
    $routePath = "people";
    $endPoint = $baseUrl . $routePath;

    //Here we must take into account the pagination
    do 
    {
        $responseFromAPIService = file_get_contents($endPoint);             //Return a json string
        $responseObject = json_decode($responseFromAPIService, false);      //Convert json string into an object

        $listOfStarWarsPersons = $responseObject->results;
        foreach($listOfStarWarsPersons as $oneStarWarsPerson)
        {
            echo "Current name is: " . $oneStarWarsPerson->name . " which har hair color: " . $oneStarWarsPerson->hair_color . "<br>";
        }

        echo "<br>Done feting ONE page<br><br>";
        //have more pages
        if ($responseObject->next != null)
        {
            //Set new endpoint if so
            $endPoint = $responseObject->next;
        }
        
    }
    //Continue fetch until no more pages are left
    while ($responseObject->next != null);

    echo "<br>Done with ALL fetching<br>";
    //display_pretty($responseObject);          //For getting insight about the structure of the json file
}


//display_Luke_skywalker();
//display_all_character_on_page();        //Do not take pagination into consideration
//display_all_character_all_pages();            //Take pagination into consideration

?>
