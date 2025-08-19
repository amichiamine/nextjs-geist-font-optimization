<?php
// Point d'entrée principal de l'application SGC_LMS

session_start();

// Pour l'instant, on charge directement la page d'accueil
// (auth.php sera ajouté en Phase 3)

$content = file_get_contents('../templates/pages/home.php');
include '../templates/layouts/main.php';
?>
