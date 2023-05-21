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
    <h2>All books</h2> 
    <h1>Index home</h1>          
    <ul>
        <?php foreach ($books as $aBook) : ?>
            <li>
                <a href="<?= $aBook['purchaseUrl'] ?>">
                    <?= $aBook['name']; ?>
                </a>
            </li>            
        <?php endforeach; ?>
    </ul>
</main>

<footer>
    <span>
        &copy; Copyright - Pizza AB - All rights reserved - Footer
    </span>
</footer>    
    
</body> 
</html>
