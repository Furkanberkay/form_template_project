<?php
// 1. Gerekli dosyaları içeri alıyoruz.
require_once '../form_template/config/config.php';
require_once '../form_template/core/FormGenerator.php';


// 2. Alanları config dosyasından al
$fields = require '../form_template/config/config.php'; 
$fields = $fields['fields']; // sadece fields kısmını alıyoruz

// 3. FormGenerator sınıfından bir nesne oluştur
$form = new FormGenerator($fields);

// 4. HTML çıktısını başlat
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Formu</title>
   <!-- CSS -->
   <link rel="stylesheet" href="../form_template/public/css/style.css">
</head>
<body>

    <div class="container">
        <h1>İletişim Formu</h1>
        <?php
            // Formu bas
            $form->renderForm();
        ?>
    </div>

   <!-- JS -->
   <script src="../form_template/public/js/form-handler.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
