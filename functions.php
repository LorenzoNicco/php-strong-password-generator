<?php
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

    $password = passwordGenerator($_GET["getLength"])
?>