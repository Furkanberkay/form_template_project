<?php

class FormProcessor
{
    private $fields;
    private $pdo;

    public function __construct($fields, $pdo)
    {
        $this->fields = $fields; // config'teki tüm alan bilgileri
        $this->pdo = $pdo;       // database bağlantısı
    }

    public function process($data)
    {
        // 1. Gerekli alanları al
        $values = [];
        foreach ($this->fields as $name => $options) {
            if (isset($data[$name])) {
                $values[$name] = htmlspecialchars(trim($data[$name]));
            } else {
                return ["success" => false, "message" => "Eksik alan: $name"];
            }
        }

        // 2. Veritabanına ekle
        $columns = implode(",", array_keys($values));
        $placeholders = ":" . implode(",:", array_keys($values));

        $sql = "INSERT INTO contacts ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute($values);
            return ["success" => true, "message" => "Form başarıyla gönderildi!"];
        } catch (PDOException $e) {
            return ["success" => false, "message" => "Hata: " . $e->getMessage()];
        }
    }
}
