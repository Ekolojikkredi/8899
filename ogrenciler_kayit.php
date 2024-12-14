<?php
// JSON dosyasını oku
$json_file = 'json/ogrenciler.json';
$data = json_decode(file_get_contents($json_file), true);

// Form verilerini al
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$email = $_POST['email'];
$okul_no = $_POST['okul_no'];
$telefon = $_POST['telefon'];
$sinif = $_POST['sinif'];

// Yeni öğrenci verisini ekle
$new_student = array(
    "id" => count($data) + 1, // ID otomatik arttırılır
    "ad" => $ad,
    "soyad" => $soyad,
    "email" => $email,
    "okul_no" => $okul_no,
    "telefon" => $telefon,
    "sinif" => $sinif,
    "puan" => 0 // Başlangıçta 0 puan
);

// Yeni öğrenciyi JSON dizisine ekle
$data[] = $new_student;

// JSON verisini dosyaya yaz
file_put_contents($json_file, json_encode($data, JSON_PRETTY_PRINT));

// Başarı mesajı
echo "Öğrenci kaydı başarılı! <a href='index.html'>Ana sayfaya dön</a>";
?>
