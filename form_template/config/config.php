<?php
return [
    "fields" => [
        "name" => [
            "label" => "Adınız Soyadınız",
            "type" => "text",
            "required" => true
        ],
        "phone" => [
            "label" => "Telefon Numaranız",
            "type" => "tel",
            "required" => true
        ],
        "email" => [
            "label" => "E-Posta Adresiniz",
            "type" => "email",
            "required" => true
        ],
        "subject" => [
            "label" => "Konu",
            "type" => "text",
            "required" => false
        ],
        "message" => [
            "label" => "Mesajınız",
            "type" => "textarea",
            "required" => true
        ],
    ]
];
