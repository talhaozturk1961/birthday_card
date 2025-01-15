php -S localhost:8000
<?php
// Formdan gelen bilgileri al
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Kullanıcının IP adresini al
$ip_address = $_SERVER['REMOTE_ADDR'];

// Zaman bilgisi ekle
$date = date('Y-m-d H:i:s');

// Verileri kaydetmek için bir dosya belirleyin
$file = 'user_data.txt';

// Verileri dosyaya yaz
$data = "Name: $name\nEmail: $email\nPhone: $phone\nIP Address: $ip_address\nDate: $date\n-------------------------\n";
file_put_contents($file, $data, FILE_APPEND);

// Kullanıcıyı belirttiğiniz sayfaya yönlendirin
header("Location: https://birthday.mewtru.com/9UbJicyS");
exit();
?>
// IP adresi al
$ip_address = $_SERVER['REMOTE_ADDR'];

// Verileri günlüğe yaz
file_put_contents('debug_log.txt', "IP Address: $ip_address\n", FILE_APPEND);
