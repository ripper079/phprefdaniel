<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login to our cool community</h1>
    <form action="loginhandler.php" method="post">        
        <div>
            <label for="inputusername">Username:</label>
            <input required type="text" name="inputusername">
        </div>
        <div>
            <label for="inputpassword">Password:</label>
            <input type="password" name="inputpassword">
        </div>                
       
        <input type="submit" name="btnsubmit" value="Login" />
    </form>
    
    
</body> 
</html>