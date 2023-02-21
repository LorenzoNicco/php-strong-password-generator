<?php
    session_start();

    $passwordParts = [];
    if (isset($_GET['passwordParts'])) {
        $passwordParts = $_GET['passwordParts'];
    }

    $password = '';
    function passwordGenerator($length, $parts) {
        // $characterList = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!$%&/?@#*+-/_:.;,';
        $characterList = '';
        $passwordLetters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $passwordNumbers = '1234567890';
        $passwordSymbols = '!$%&/?@#*+-/_:.;,';
        $passwordRepeat = false;

        if (in_array('letters', $parts)) {
            $characterList .= $passwordLetters;
        }
        
        if (in_array('numbers', $parts)) {
            $characterList .= $passwordNumbers;
        }
        
        if (in_array('symbols', $parts)) {
            $characterList .= $passwordSymbols;
        }

        if (in_array('repeat', $parts)) {
            $passwordRepeat = true;
        }

        $passwordGenerated = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characterList));

            if ($passwordRepeat) {
                if (strpos($passwordGenerated, $characterList[$randomIndex])) {
                    $randomIndex = rand(0, strlen($characterList));
                }
                else {
                    $passwordGenerated .= $characterList[$randomIndex];
                }
            }
            else {
                $passwordGenerated .= $characterList[$randomIndex];
            }
        }
        
        return $passwordGenerated;
    }

    if (isset($_GET["getLength"])) {
        $password = passwordGenerator($_GET["getLength"], $passwordParts);

        $_SESSION['password'] = $password;
        header('Location: ./passwordShow.php');
    }

?>