<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 🔐 Güvenlik: JSON döndürmek için header
header('Content-Type: application/json');

// 🧠 Gerekli dosyaları çağırıyoruz (Yollar dikkat!)
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../core/FormProcessor.php';
$pdo = require __DIR__ . '/../../database/db.php';

      // PDO bağlantısı

// 🧪 POST geldiyse veriyi işle
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = require '../../config/config.php'; // Tüm config dosyasını al
    $fields = $fields['fields'];                 // Sadece "fields" kısmını al

    $processor = new FormProcessor($fields, $pdo); // Sınıfı başlat
    $response = $processor->process($_POST);       // Veriyi işle

    echo json_encode($response); // Sonucu JavaScript'e gönder
    exit;
}

// ❌ POST değilse geçersiz istek
echo json_encode([
    "success" => false,
    "message" => "Geçersiz istek"
]);
