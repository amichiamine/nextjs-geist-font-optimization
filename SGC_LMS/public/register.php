<?php
// Page d'inscription pour SGC_LMS

session_start();
require_once '../includes/config.php';
require_once '../includes/auth.php';

$auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    try {
        // Logique d'inscription
        $auth->register($email, $username, $password, $firstName, $lastName);
        header('Location: login.php');
        exit;
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

include '../templates/pages/register.php';
?>
