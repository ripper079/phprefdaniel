<?php
//Lets take a look at  $_POST and $_GET supervariable
//$_GET get data through url or forms
//$_POST get data from a form

function myFirstName()
{
    return "Daniel";
}

function myLastName()
{
    return "Oikarainen";
}

//Retrieves value from url
// echo $_GET['bestcity'];
// echo $_GET['bestcountry'];


if (isset($_POST['submit'])){
//Display result from form
    echo $_POST['firstname'] . "<br>";
    echo $_POST['lastname'] . "<br>";
    echo $_POST['submit'];
}

?>

<!-- <h2><?php echo myFirstName() . ' ' . myLastName(); ?></h2> -->

<!-- Query string, use as reference -->
<!-- https://example.com/path/to/page?name=ferret&color=purple -->
<!--     ?name=ferret&color=purple          -->
<!-- <h1><?php echo $_SERVER['PHP_SELF']; ?></h1> -->
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?bestcity=Borås&bestcountry=Sweden">Click ME!</a> -->
<h1>Simple form</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname">
    </div>
    <div>
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Skicka" name="submit">
</form>

