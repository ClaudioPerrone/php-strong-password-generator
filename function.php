<?php

//Funzione per generare una password
function generatePassword($passwordLength, $passwordChars) {
    $password = '';
    for($i = 0; $i < $passwordLength; $i++) {
        $randomIndex = rand(0, count($passwordChars) - 1);
        $password .= $passwordChars[$randomIndex];
    }

    return $password;
}


// funzione per inserire tutti gli elementi come password
function getAvailableChars() {
    
    //Vengono creati gli elementi
    $lowerCaseChars = range("a", "z");
    $upperCaseChars = range("A", "Z");
    $numbers = range(0, 9);
    $specialChars = range("-", "!");

    // Qui vengono uniti in una sola riga
    $allChars = array_merge($lowerCaseChars, $upperCaseChars, $numbers, $specialChars);
    return $allChars;
}

?>