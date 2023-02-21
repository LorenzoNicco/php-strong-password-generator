<?php
    include __DIR__ .'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Password Show</title>
    </head>
    <body>
        <p>La password è: <?php echo $_SESSION['password'] ?></p>
    </body>
</html>