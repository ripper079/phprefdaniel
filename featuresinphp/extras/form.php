
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="/formsubmit" method="post">
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

        <input type="button" name="btnsubmit" value="Send form" />
    </form>
    
    
</body> 
</html>
