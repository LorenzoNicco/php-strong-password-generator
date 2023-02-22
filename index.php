<?php
    session_start();
    include __DIR__ .'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <form action="" method="GET">
            <div class="length">
                <label for="length">Numero di caratteri</label>
                <input type="number" name="getLength" value="" id="length" required>
            </div>

            <div class="options">
                <div>
                    <label for="letters">Lettere</label>
                    <input type="checkbox" id="letters" name="passwordParts[]" value="letters">
                </div>
    
                <div>
                    <label for="numbers">Numeri</label>
                    <input type="checkbox" id="numbers" name="passwordParts[]" value="numbers">
                </div>
    
                <div>
                    <label for="symbols">Simboli</label>
                    <input type="checkbox" id="symbols" name="passwordParts[]" value="symbols">
                </div>
    
                <div>
                    <label for="repeat">Ripetizione caratteri</label>
                    <input type="checkbox" id="repeat" name="passwordParts[]" value="repeat">
                </div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>