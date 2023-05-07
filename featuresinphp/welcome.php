<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello, world!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in tortor vel libero malesuada convallis. Duis fringilla, lorem nec aliquam pulvinar, velit velit molestie est, ac blandit libero mauris in nisi. Integer luctus tellus eget nibh aliquam, ac luctus nunc tincidunt.</p>
        <p> <?php echo 'Post One'; ?></p>
        <p> <?= 'Post TWO'; ?></p>
    </main>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
