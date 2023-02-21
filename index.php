<?php
    include __DIR__ .'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <form action="" method="GET">
            <input type="number" name="getLength" value="">
            <button type="submit">Submit</button>
        </form>

        <p>La password è: <?php echo $password ?></p>
    </body>
</html>