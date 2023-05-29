<?php

//var_dump($_SERVER["REQUEST_METHOD"]);


//Prefer the bottom solution insteed
// if (isset($_POST["btnsubmit"])){

// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars prevent cross site
    $firstname = htmlspecialchars($_POST["inputfirstname"]);
    $lastname = htmlspecialchars($_POST["inputlastname"]);
    $username = htmlspecialchars($_POST["inputusername"]);
    $password = htmlspecialchars($_POST["inputpassword"]);
    $age = htmlspecialchars($_POST["inputage"]);
    $favoritePet = htmlspecialchars($_POST["inputfavoritepet"]);
    $gender = htmlspecialchars($_POST["inputgender"]);
    // $instagram = htmlspecialchars($_POST["chkinstagram"]);
    // $facebook = htmlspecialchars($_POST["chkfacebook"]);

    if (empty($firstname)) {
        echo "The first name is empty!!!";
    }

    echo "You entered firstname=" . $firstname . "<br>";
    echo "You entered lastname=" . $lastname . "<br>";
    echo "You entered username=" . $username . "<br>";
    echo "You entered password=" . $password . "<br>";
    echo "You entered age=" . $age . "<br>";
    echo "You entered favoritePet=" . $favoritePet . "<br>";
    echo "You entered gender=" . $gender . "<br>";

    //SPecial Treatment with checkboxes
    // echo "Instagram" . $instagram . "<br>";
    // echo "Facebook" . $facebook . "<br>";

    if (isset($_POST["chkinstagram"])) {
        echo "You are a member of Instagram<br>";
    }
    if (isset($_POST["chkfacebook"])) {
        echo "You are a member of Facebook <br>";
    }

    //SHA512
    $salt = '$6$'.base64_encode(random_bytes(16)).'$'; // Generate a random salt value
    //Hash it
    echo "salt value=" . $salt . "<br>" ;



    //Send back to front page
    //header("Location: ../../index.php");
}
