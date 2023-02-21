<?php
    session_start();

    $password = '';
    function passwordGenerator($length) {
        $characterList = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!$%&/?@#*+-/_:.;,';
        $passwordGenerated = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characterList));
            $passwordGenerated .= $characterList[$randomIndex];
        }
        
        return $passwordGenerated;
    }

    if (isset($_GET["getLength"])) {
        $password = passwordGenerator($_GET["getLength"]);

        $_SESSION['password'] = $password;
        header('Location: ./passwordShow.php');
    }

?>