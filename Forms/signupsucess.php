<?php
session_start();
echo "Signup final";

?>

<h1>Welcome 
<?php
    if(isset($_SESSION['username_created']))
    {
        echo $_SESSION['username_created'];
        unset($_SESSION['username_created']);
    } 
?>

</h1>
