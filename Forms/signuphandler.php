<?php
require_once '../featuresinphp/extras/database.php';
session_start();


//var_dump($_SERVER["REQUEST_METHOD"]);


//Prefer the bottom solution insteed
// if (isset($_POST["btnsubmit"])){

// }




function saveSignUpUserToDB(string $userName, string $hasedPassword)
{
    $signupSucessful = false;

    $sqlConnectionConfig = getConnectionConfigDigitalOcean();
    $DB_TABLE = "users";

    $conn = mysqli_connect($sqlConnectionConfig['host'], $sqlConnectionConfig['user'], $sqlConnectionConfig['password'], $sqlConnectionConfig['dbname']);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
        //Prepared statement, prevent SQL Injection
        $stmt = mysqli_prepare($conn, "INSERT INTO " . $DB_TABLE . " (username, hashedpassword ) VALUES (?, ?)");
        //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $userName,
            $hasedPassword
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "New record inserted successfully<br>";
            $signupSucessful = true;
        } else {
            echo "Error(executing prepared statement): " . mysqli_error($conn) . "<br>";
        }
    } catch (Exception $e) {
        echo "Error occurred=" . $e->getMessage() . "with code " . $e->getCode() . "<br>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);

    return $signupSucessful;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //htmlspecialchars prevent cross site
    $username = htmlspecialchars($_POST["inputusername"]);
    $password = htmlspecialchars($_POST["inputpassword"]);

    if (empty($username)) {
        echo "The firstname field is empty!!!";
        header("Location: ./signup.php");
    }
    if (empty($password)) {
        //echo "The password field is empty!!!";
        //echo "The password field is smaller than 8 characters!!!";
        header("Location: ./signup.php");
    }

    //echo "You entered username=" . $username . "<br>";
    //echo "You entered password=" . $password . "<br>";

    $hashedPassword = password_hash($username, PASSWORD_DEFAULT);

    $postInserted = saveSignUpUserToDB($username, $hashedPassword);

    if ($postInserted) {
        echo "SDFFDSDFS";
        $_SESSION['username_created'] = $username;
        //echo "The session message=" . $_SESSION['status'];
        header("Location: ./signupsucess.php");
    }
}

?>