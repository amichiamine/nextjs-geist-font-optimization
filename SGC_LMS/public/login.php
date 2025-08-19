<?php
// Page de connexion pour SGC_LMS - Design Glass Morphism

session_start();
require_once '../includes/config.php';
require_once '../includes/auth.php';

$auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        $user = $auth->login($email, $password);
        header('Location: dashboard.php');
        exit;
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

// Inclure le template avec design Glass Morphism et thème bleu/vert menthe
include '../templates/pages/login.php';
?>
