<?php
require_once __DIR__ . '/function.php';
/* 
Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator

Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/
$userPasswordLength = isset($_GET['password-length']) ? intval($_GET['password-length']) : '';
$password = '';

if(!empty($userPasswordLength)) {
    $allAvailableChar = getAvailableChars();
    //var_dump($allAvailableChar);
    $password = generatePassword($userPasswordLength, $allAvailableChar);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body class="mt-4">
    <header class="text-center mb-4">
        <h1>PASSWORD GENERATOR</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="mb-4">
                    <p><?php echo empty($password) ? "Compila il form per poter generare la password" : "La tua password è: " . $password ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="GET">
                        <div class="mb-4">
                            <label for="password-length" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-length" name="password-length" value="<?php echo $userPasswordLength; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>