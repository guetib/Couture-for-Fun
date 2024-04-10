<?php

session_start();
$_SESSION['inscription_message'] = "Votre inscription a été effectuée avec succès !";


include_once './../domain/Inscription.class.php';
include_once './../dao/PDOInscriptionDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $genre = $_POST['genre'] ?? '';
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $phoneNumber = $_POST['phoneNumber'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $address = $_POST['address'] ?? '';

    $inscription = new Inscription($genre, $firstName, $lastName, $phoneNumber, $email, $password, $address);
    $dao = new PDOInscriptionDAO();
    $dao->insert($inscription);

    // Redirection
    header('Location: inscription.php');
    exit;
}
