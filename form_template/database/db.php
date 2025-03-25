<?php
class Database {
    private $host = "localhost";
    private $dbname = "contact_form_db";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            // Hata varsa JSON olarak döndür, front-end anlayabilsin
            echo json_encode([
                "success" => false,
                "message" => "Veritabanı bağlantı hatası: " . $e->getMessage()
            ]);
            exit;
        }
    }
}

// 📌 Bu dosyayı çağıranlar için doğrudan PDO nesnesi döndür
$database = new Database();
return $database->connect();
