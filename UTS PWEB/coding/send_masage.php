<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Proses pengiriman pesan di sini, bisa menggunakan mail() atau database
    // Mail function example (uncomment to use):
    // mail("your-email@example.com", $subject, $message, "From: $name <$email>");

    echo "Pesan berhasil dikirim!";
}
?>