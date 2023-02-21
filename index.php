<?php

    $password = '';
    function passwordGenerator($length) {
        $characterList = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!£$%&/?@#éè*+-/òà-_:.;,';
        $passwordGenerated = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characterList));
            $passwordGenerated .= $characterList[$randomIndex];
        }
        
        return $passwordGenerated;
    }

    $password = passwordGenerator($_GET["getLength"])
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