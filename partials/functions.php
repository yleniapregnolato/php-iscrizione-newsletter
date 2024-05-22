<?php 

if (isset($_POST["emails"])) {
    $user_email = $_POST["emails"];
    // var_dump($user_email);
    // controllo se nella email sono presenti ".@"
    if (str_contains($user_email, '.') && str_contains($user_email, '@')) {
        $valid = "Email valida";
        // salvo la chiave nella sessione dell'utente
        session_start();
        $_SESSION["correct"] = $user_email;
        header('Location: ./thankyou.php');
    } else {
        $error = "Email non valida";
    }
}

?>