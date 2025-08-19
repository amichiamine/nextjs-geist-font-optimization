<?php
// Classe Database pour la gestion de la base de données

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $config = require 'config.php';
        $dbType = $config['database']['type'];
        $dbPath = $config['database']['path'];

        if ($dbType === 'sqlite') {
            $this->connection = new PDO("sqlite:" . __DIR__ . '/../' . $dbPath); // Chemin corrigé
        } else {
            throw new Exception("Type de base de données non supporté.");
        }

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
