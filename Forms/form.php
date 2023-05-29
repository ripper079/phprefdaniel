
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="formhandler.php" method="post">
        <div>
            <!-- The required attribute dont disable that a form can be submitted even if it seems so...  -->
            <!-- Just an illusion, go into developer tool and remove the required atribut -->
            <label for="inputfirstname">First Name:</label>
            <input required type="text" name="inputfirstname">
        </div>
        <div>
            <label for="inputlastname">Last Name:</label>
            <input type="text" name="inputlastname">
        </div>
        <div>
            <label for="inputage">Age:</label>
            <input type="text" name="inputage">
        </div>
        <div>
            <label for="inputusername">Username:</label>
            <input type="text" name="inputusername">
        </div>
        <div>
            <label for="inputpassword">Password:</label>
            <input type="password" name="inputpassword">
        </div>
        <div>
            <label for="inputfavoritepet">Favorite Pet?</label>
            <select id="favoritepet" name="inputfavoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
        </div>
        <div>
            <label for="inputgender">Gender:</label>
            <input type="radio" id="male" name="inputgender" value="male" checked="checked">
            <label for="male">Male</label>
            <input type="radio" id="female" name="inputgender" value="female">
            <label for="female">Female</label>
        </div>

        <fieldset>
            <legend>How did you hear about us?</legend>
            <div>
                <input type="checkbox" name="chkinstagram" value="INSTAGRAM">
                <label for="chkinstagram">Instagram</label>
            </div>
            <div>
                <input type="checkbox" name="chkfacebook" value="FACEBOOK">
                <label for="chkfacebook">Facebook</label>
            </div>            
        </fieldset>

        <input type="submit" name="btnsubmit" value="Send form" />
    </form>
    
    
</body> 
</html>
