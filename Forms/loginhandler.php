<?php

require_once '../featuresinphp/extras/database.php';

function validateUser(string $userName, $userPassword)
{
    
    $flagValidCredentials = false;

    $sqlConnectionConfig = getConnectionConfigDigitalOcean();
    $DB_TABLE = "users";

    $fetchedHashedPassWordFromDB = null;

    $conn = mysqli_connect($sqlConnectionConfig['host'], $sqlConnectionConfig['user'], $sqlConnectionConfig['password'], $sqlConnectionConfig['dbname']);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Se if user exist in database
    try {
        //Prepared statement, prevent SQL Injection
        $stmt = mysqli_prepare($conn, "SELECT hashedpassword FROM " . $DB_TABLE .  " WHERE username = ?");

        //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
        mysqli_stmt_bind_param(
            $stmt,
            "s",
            $userName
        );

        if (mysqli_stmt_execute($stmt)) {

            //Bind the result variable
            mysqli_stmt_bind_result($stmt, $fetchedHashedPassWordFromDB);

            // Fetch the result
            if (mysqli_stmt_fetch($stmt)) {
                // Output the hashed password
                echo "Hashed Password FROM DB: " .$fetchedHashedPassWordFromDB . "<br>";
                //echo "Provided Password FROM user: " .$password . "<br>";

                if (password_verify($userPassword,$fetchedHashedPassWordFromDB)){
                    $flagValidCredentials = true;
                }
                
            } else {
                //echo "No matching record found";
            }


        } else {
            echo "Error(executing prepared statement): " . mysqli_error($conn) . "<br>";
        }
    } catch (Exception $e) {
        echo "Error occurred=" . $e->getMessage() . "with code " . $e->getCode() . "<br>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    return $flagValidCredentials;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars prevent cross site
    $username = htmlspecialchars($_POST["inputusername"]);
    $password = htmlspecialchars($_POST["inputpassword"]);

    if (empty($username)) {
        echo "The firstname field is empty!!!";
        //header("Location: ./login.php");
    }
    if (empty($password)) {
        //echo "The password field is empty!!!";
        //echo "The password field is smaller than 8 characters!!!";
        //header("Location: ./login.php");
    }

    echo "You entered username=" . $username . "<br>";
    echo "You entered password=" . $password . "<br>";

    //$hashedPassword = password_hash($username, PASSWORD_DEFAULT);

    $validCredentials = validateUser($username, $password);

    if ($validCredentials){
        echo "login suxxesssfull";
    }


}
