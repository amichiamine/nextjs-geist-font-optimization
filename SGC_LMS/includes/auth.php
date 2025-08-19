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

    public function register($email, $username, $password, $firstName = '', $lastName = '') {
        // Vérifier si l'email existe déjà
        $sql = "SELECT id FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        
        if ($stmt->fetch()) {
            throw new Exception('Cet email est déjà utilisé');
        }

        // Vérifier si le nom d'utilisateur existe déjà
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        if ($stmt->fetch()) {
            throw new Exception('Ce nom d\'utilisateur est déjà pris');
        }

        // Créer le nouvel utilisateur
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $userId = uniqid('user_', true);
        
        $sql = "INSERT INTO users (id, email, username, password, first_name, last_name, role, created_at) 
                VALUES (:id, :email, :username, :password, :first_name, :last_name, 'apprenant', datetime('now'))";
        
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([
            'id' => $userId,
            'email' => $email,
            'username' => $username,
            'password' => $hashedPassword,
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);

        if (!$result) {
            throw new Exception('Erreur lors de la création du compte');
        }

        return $userId;
    }
}
?>
