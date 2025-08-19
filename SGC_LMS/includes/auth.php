<?php
// Classe d'authentification pour SGC_LMS

require_once 'database.php'; // Inclusion de la classe Database

class Auth {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return $user;
        } else {
            throw new Exception('Identifiants invalides');
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public function getCurrentUser() {
        if ($this->isLoggedIn()) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['id' => $_SESSION['user_id']]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return null;
    }
}
?>
