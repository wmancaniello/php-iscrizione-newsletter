<?php

// Funzione di Validazione
function validateEmail($email)
{
    return preg_match("/@.*\./", $email);
}


// Funzione di redirect
function validate_mail($email)
{
    // Controllo se l'email è corretta
    if (isset($email) && validateEmail($email)) {
        // Se l'email è valida
        header("Location: thankyou.php");
        exit;
    }
}

// Controllo se la mail è stata inviata ed è valida

if(isset($_POST['email'])) {
    validate_mail($_POST['email']);
}

?>