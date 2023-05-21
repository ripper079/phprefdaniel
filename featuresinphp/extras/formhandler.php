<?php

//var_dump($_SERVER["REQUEST_METHOD"]);


//Prefer the bottom solution insteed
// if (isset($_POST["btnsubmit"])){

// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars prvent cross site
    $firstname = htmlspecialchars($_POST["inputfirstname"]);
    $lastname = htmlspecialchars($_POST["inputlastname"]);
    $age = htmlspecialchars($_POST["inputage"]);
    $favoritePet = htmlspecialchars($_POST["inputfavoritepet"]);
    $gender = htmlspecialchars($_POST["inputgender"]);
    // $instagram = htmlspecialchars($_POST["chkinstagram"]);
    // $facebook = htmlspecialchars($_POST["chkfacebook"]);

    if (empty($firstname)) {
        echo "The first name is empty!!!";
    }

    echo "You entered=" . $firstname . "<br>";
    echo "You entered=" . $lastname . "<br>";
    echo "You entered=" . $age . "<br>";
    echo "You entered=" . $favoritePet . "<br>";
    echo "You entered=" . $gender . "<br>";

    //SPecial Treatment with checkboxes
    // echo "Instagram" . $instagram . "<br>";
    // echo "Facebook" . $facebook . "<br>";

    if (isset($_POST["chkinstagram"])) {
        echo "You are a member of Instagram<br>";
    }
    if (isset($_POST["chkfacebook"])) {
        echo "You are a member of Facebook <br>";
    }

    //Send back to front page
    //header("Location: ../../index.php");
}
