<?php


//Object Oriented way, the preffered way
function insertRecordObjectOrientWayPreparedStatements()
{
    $DB_HOST = "localhost";
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


function insertRecordObjectOrientWithoutPreparedStatements()
{
    $DB_HOST = "localhost";
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
function insertRecordToDatabase()
{
    $DB_HOST = "localhost";
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
function updateFirstName($primary_key_id)
{
    $DB_HOST = "localhost";
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

function deleteAPost($primary_key_id)
{
    $DB_HOST = "localhost";
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

function getAPost($id_post)
{
    $DB_HOST = "localhost";
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


}

//echo "Code execution on database with prepared statements";


//CRUD
//insertRecordToDatabase();                         //C
//insertRecordObjectOrientWayPreparedStatements     //C
//getAPost(2);                                      //R
//updateFirstName(4);                               //U
//deleteAPost(3);                                   //D

insertRecordObjectOrientWithoutPreparedStatements();
