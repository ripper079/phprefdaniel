<?php


//Object Oriented way, the preffered way
//RAW SQL
function insertRecordObjectOrientWayPreparedStatements()
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    // Create a connection
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = "Daniel SECURE";
    $lastName = "Oikarainen SECURE";
    $country = "Sweden SÄKER";

    // Prepared statement, prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO " . $DB_TABLE . " (firstname, lastname, country) VALUES (?, ?, ?)");
    //prepare statement didnt go well
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
    $stmt->bind_param("sss", $firstName, $lastName, $country);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "New record was inserted successfully and secure<br>";
    } else {
        echo "Error (executing prepared statement): " . $stmt->error . "<br>";
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $conn->close();
}

//RAW SQL
function insertRecordObjectOrientWithoutPreparedStatements()
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    // Create a connection
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = "Daniel sql-injection...";
    $lastName = "Oikarainen sql-injection...";
    $country = "Sweden sql-injection...";

    // Construct the SQL query
    $sql ="INSERT INTO " . $DB_TABLE . " (firstname, lastname, country) VALUES ('" . $firstName . "'" . ",'" . $lastName . "'". ",'" . $country . "'" . ");";

    // Execute the query
    if ($conn->query($sql) === true) {
        echo "New record was inserted successfully and secure<br>";
    } else {
        echo "Error (executing query): " . $conn->error . "<br>";
    }

    // Close the database connection
    $conn->close();
}

// prepared statements
//RAW SQL
function insertRecordToDatabase()
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    //Create a connection
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $firstName = "Daniel";
    $lastName = "Oikarainen";
    $country = "Sweden";


    //Prepared statement, prevent SQL Injection
    $stmt = mysqli_prepare($conn, "INSERT INTO " . $DB_TABLE . " (firstname, lastname, country) VALUES (?, ?, ?)");
    //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $firstName,
        $lastName,
        $country
    );

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        //echo "New record inserted successfully<br>";
    } else {
        echo "Error(executing prepared statement): " . mysqli_error($conn) . "<br>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
}

//I find this way a lot cleaner actually
//RAW SQL
function updateFirstName($primary_key_id)
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    //Create a connection
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $firstName = "Peellllee";
    $lastName = "Svenssonfoo";

    //Prepared statement, prevent SQL Injection
    $stmt = $conn->prepare("UPDATE " . $DB_TABLE . " SET firstname = ?, lastname = ? WHERE id = ?");

    //prepare statement didnt go well
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
    //ALternative 1
    // $stmt->bind_param(
    //     "ssi",
    //     $firstName,
    //     $lastName,
    //     $primary_key_id
    // );
    //ALternative 2
    $stmt->bind_param("ssi", $firstName, $lastName, $primary_key_id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Post updated successfully";
    } else {
        echo "Error updating post: " . $stmt->error;
    }

    // Close prepared statement
    $stmt->close();

    // Close database connection
    $conn->close();

}

//RAW SQL
function deleteAPost($primary_key_id)
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    //Create a connection
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Prepared statement, prevent SQL Injection
    $stmt = $conn->prepare("DELETE FROM " . $DB_TABLE . " WHERE id = ? ");

    //prepare statement didnt go well
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
    $stmt->bind_param(
        "i",
        $primary_key_id
    );

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Post deleted successfully";
    } else {
        echo "Error deleting post: " . $stmt->error;
    }

    // Close prepared statement
    $stmt->close();

    // Close database connection
    $conn->close();
}
//RAW SQL
function getAPost($id_post)
{
    $DB_PORT = "3306";
    $DB_HOST = "localhost" . ":" . $DB_PORT;
    $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    $DB_TABLE = "personer";

    //Create a connection
    //Alternative 1
    // $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    //Alternative 2
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Prepared statement, prevent SQL Injection
    $stmt = $conn->prepare("SELECT firstname, lastname, country FROM " . $DB_TABLE . " WHERE id = ?");

    //prepare statement didnt go well
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    //Tricky, parameter must match types in table, i=int;d=float,s=string,b=blob
    $stmt->bind_param(
        "i",
        $id_post
    );

    // Execute the prepared statement
    /*
    if ($stmt->execute()) {
        echo "Post reading successfully<br>";

        // Bind the result variables
        $stmt->bind_result($firstname, $lastname, $country);
        // Fetch the values
        if ($stmt->fetch()) {
            echo "Firstname: " . $firstname . "<br>";
            echo "Lastname: " . $lastname . "<br>";
            echo "Country: " . $country . "<br>";
        } else {
            echo "No post found";
        }


    } else {
        echo "Error reading post: " . $stmt->error;
    }
    */
    try {
        if ($stmt->execute()) {
            echo "Post reading successfully<br>";

            // Bind the result variables
            $stmt->bind_result($firstname, $lastname, $country);
            // Fetch the values
            if ($stmt->fetch()) {
                echo "Firstname: " . $firstname . "<br>";
                echo "Lastname: " . $lastname . "<br>";
                echo "Country: " . $country . "<br>";
            } else {
                echo "No post found";
            }
        } else {
            echo "Error reading post: " . $stmt->error;
        }
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage() . "<br>";
    }


}

//PDO - PHP Data Objects
//PDO allows you to write database-independent code by providing a unified set of methods
//to interact with databases.

function pdoAcces()
{
    // $DB_PORT = "3306";
    // $DB_HOST = "localhost" . ":" . $DB_PORT;
    // $DB_NAME = "test";
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";
    // $DB_TABLE = "personer";

    //Data Source Name - String that specifies the details required to connect to a specific database - aka connection string
    $dsn="mysql:host=localhost;port=3306;dbname=test;charset=utf8mb4";
    //PDO - PHP Data Objects

    $pdo = new PDO($dsn, $DB_USER, $DB_PASS);

    $preparedQueyStatement = $pdo->prepare("SELECT * FROM personer");

    //Execute the statement
    $preparedQueyStatement->execute();

    //Get the result set
    // $postResult = $preparedQueyStatement->fetchAll();
    $postResult = $preparedQueyStatement->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($postResult);
    // echo "</pre>";
    // die();

}

function pdoAccesUserfriendly()
{
    $DB_USER = "daniel";
    $DB_PASS = "1234567890";

    $databaseConfig = [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'test',
        'user' => $DB_USER,
        'password' => $DB_PASS
    ];

    //echo http_build_query($config);


    // $dsn="mysql:host=localhost;port=3306;dbname=test;charset=utf8mb4";
    $dsn="mysql:host=". $databaseConfig['host'] .";port=" . $databaseConfig['port'] . ";dbname=". $databaseConfig['dbname'] .";charset=utf8mb4";

    // $connection = new PDO($dsn, $DB_USER, $DB_PASS, [
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    // ]);

    $pdo = new PDO(
        $dsn,
        $databaseConfig['user'],
        $databaseConfig['password'],
        [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    );

    $preparedQueyStatement = $pdo->prepare("SELECT * FROM personer");

    //Execute the statement
    $preparedQueyStatement->execute();

    //Get the result set
    // $postResult = $preparedQueyStatement->fetchAll();
    $postResult = $preparedQueyStatement->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($postResult);
    // echo "</pre>";
    // die();
    foreach($postResult as $aPerson) {
        echo "Full Name:" . $aPerson['firstname'] . " " . $aPerson['lastname'] . $_GET[''] . "<br>";
    }

}


function getConnectionConfigDigitalOcean()
{
    $DB_USER = "daniel";
    $DB_PASS = "12345";
    $DB_PORT = 3306;

    $databaseConfig = [
        'port' => $DB_PORT,
        'host' => '64.226.95.103' . ':' . $DB_PORT,
        'dbname' => 'db_php_train',
        'user' => $DB_USER,
        'password' => $DB_PASS
    ];

    return $databaseConfig;
}


function addPostToDigitalOceanDB()
{
    /*
    $DB_PORT = "3306";
    $DB_HOST = "64.226.95.103" . ":" . $DB_PORT;
    $DB_NAME = "db_php_train";
    $DB_USER = "daniel";
    $DB_PASS = "12345";
*/
    $sqlConnectionConfig = getConnectionConfigDigitalOcean();
    $DB_TABLE = "employees";

    //Create a connection
    //$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    $conn = mysqli_connect($sqlConnectionConfig['host'], $sqlConnectionConfig['user'], $sqlConnectionConfig['password'], $sqlConnectionConfig['dbname']);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $firstName = "Pelle";
    $lastName = "Svanslös";
    $email = "pelle@hotmail.com";
    $hiredate = "2019-04-12";
    $salary = "1999.14";
    $department ="IT";

    try {
        //Prepared statement, prevent SQL Injection
        $stmt = mysqli_prepare($conn, "INSERT INTO " . $DB_TABLE . " (first_name, last_name, email, hire_date, salary, department) VALUES (?, ?, ?,?, ?, ?)");
        //Tricky, parameters must match types in table, i=int;d=float,s=string,b=blob
        mysqli_stmt_bind_param(
            $stmt,
            "ssssds",
            $firstName,
            $lastName,
            $email,
            $hiredate,
            $salary,
            $department
        );

        // Execute the prepared statement
        // if (mysqli_stmt_execute($stmt)) {
        //     echo "New record inserted successfully<br>";
        // } else {
        //     echo "Error(executing prepared statement): " . mysqli_error($conn) . "<br>";
        // }


        if (mysqli_stmt_execute($stmt)) {
            echo "New record inserted successfully<br>";
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
}

//pdoAccesUserfriendly();

//echo "Hello World";
//addPostToDigitalOceanDB();












//echo "Code execution on database with prepared statements";


//CRUD
//insertRecordToDatabase();                         //C
//insertRecordObjectOrientWayPreparedStatements     //C
//getAPost(2);                                      //R
//updateFirstName(4);                               //U
//deleteAPost(3);                                   //D

//insertRecordObjectOrientWithoutPreparedStatements();
