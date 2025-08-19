<?php
// Page de déconnexion pour SGC_LMS

session_start();
require_once '../includes/auth.php';

$auth = new Auth();
$auth->logout();

header('Location: index.php');
exit;
?>
