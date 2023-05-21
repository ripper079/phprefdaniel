<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Best</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>              
    <?php require('partials/nav.php') ?>
</header> 

<!-- Main Content -->
<main>
    <h1>About view - Pizza AB</h1>   
    <div>
        <article>            
            <h3>Article headline 1</h3>
            <p><?= $textCompany  ?></p>                    
        </article>
    </div>
</main>

<footer>
    <span>
        &copy; Copyright - Pizza AB - All rights reserved - Footer
    </span>
</footer>    

</body> 
</html>
