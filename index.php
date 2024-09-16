<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle ?? 'Default Title'; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><?php echo $pageTitle ?? 'Welcome!'; ?></h1>
        <p>
            <?php
            // Add dynamic content here
            if (isset($content)) {
                echo $content;
            } else {
                echo "This is a simple PHP and HTML template.";
            }
            ?>
        </p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Website. All rights reserved.</p>
    </footer>

</body>
</html>
