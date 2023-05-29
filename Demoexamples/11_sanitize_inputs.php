<?php 

if (isset($_POST['submit'])){
    //This protect from javascript code to be executed
    // $name = htmlspecialchars($_POST['name']);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // $age = htmlspecialchars($_POST['age']);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    //Insteed of executing code it only displays it
    echo $name;        
    echo $age;
    }

    //Security risk, may execute on client side
    // $js_code = "<script>alert(1);</script>";
    // echo $js_code;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>    
    <input type="submit" value="Skicka" name="submit">
</form>