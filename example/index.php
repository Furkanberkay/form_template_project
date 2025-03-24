<?php
// 1. Gerekli dosyaları içeri alıyoruz.
require_once 'form_template/config/config.php'; // config dosyası: hangi alanlar olacak?
require_once 'form_template/core/FormGenerator.php'; // Form oluşturan sınıfımız

// 2. Alanları config dosyasından al
$fields = require 'form_template/config/config.php'; 
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
    <link rel="stylesheet" href="form_template/public/css/style.css"> <!-- senin stil dosyan buraya -->
</head>
<body>

    <div class="container">
        <h1>İletişim Formu</h1>
        <?php
            // Formu bas
            $form->renderForm();
        ?>
    </div>

    <!-- JavaScript dosyasını ekle -->
    <script src="form_template/public/js/form-handler.js"></script>
</body>
</html>
