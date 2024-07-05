<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My Simple PHP Page</h1>
        <p>This is a simple page demonstrating PHP, CSS, and an image.</p>
        <img src="./image.jpg" alt="Sample Image">
        <?php
            echo "<p>Today's date is " . date("Y-m-d") . ".</p>";
        ?>
    </div>
</body>
</html>
