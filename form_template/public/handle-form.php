<?php
// 1. Gerekli dosyaları çağır
$config = require __DIR__ . '/../config/config.php';
$fields = $config['fields'];

require_once __DIR__ . '/../core/FormProcessor.php';
require_once __DIR__ . '/../database/db.php';

// 2. POST verisi geldi mi kontrol et
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $processor = new FormProcessor($fields, $pdo); // Config ve veritabanını gönder
    $result = $processor->process($_POST);         // Verileri işle

    // 3. Sonucu JSON olarak geri gönder (JS burayı dinliyor)
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}

// 4. POST gelmediyse hata döndür
echo json_encode([
    "success" => false,
    "message" => "Geçersiz istek!"
]);
exit;
