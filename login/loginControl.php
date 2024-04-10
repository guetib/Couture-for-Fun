<?php

session_start();
include_once './../dao/PDOInscriptionDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$email || !$password) {
        $_SESSION['login_error'] = "Veuillez remplir tous les champs.";
        header('Location: login.php');
        exit;
    }

    $dao = new PDOInscriptionDAO();
    $user = $dao->findByEmail($email);

    if ($user /*&& password_verify($password, $user->getPassword())*/) {
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['login_error'] = '';
        header('Location: ../index.php');
        exit;
    }

    $_SESSION['login_error'] = "Adresse email ou mot de passe incorrect.";
    header('Location: login.php');
}
