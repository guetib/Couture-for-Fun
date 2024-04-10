<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "coutureForFun3@gmail.com";


    $subject = "Nouveau message de " . $_POST['email'];


    $message = $_POST['message'];


    $headers = "From: " . $_POST['email'];

    // Envoi de l'e-mail
    if (mail($to_email, $subject, $message, $headers)) {
        echo "<p class='text-success'>Votre message a été envoyé avec succès.</p>";
    } else {
        echo "<p class='text-danger'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.</p>";
    }
} else {
    header("Location: contact.php");
    exit();
}
