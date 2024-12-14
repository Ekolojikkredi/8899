<?php
// JSON dosyasını oku
$json_file = 'json/ogrenciler.json';
$data = json_decode(file_get_contents($json_file), true);

// Öğrenci ID'sini al
$ogrenci_id = $_GET['ogrenci_id'];

// Öğrenciyi ara
$ogrenci = null;
foreach ($data as $student) {
    if ($student['id'] == $ogrenci_id) {
        $ogrenci = $student;
        break;
    }
}

// Öğrenci bulunduysa veriyi göster
if ($ogrenci) {
    echo "<h1>Öğrenci Bilgileri</h1>";
    echo "<p>Ad: " . $ogrenci['ad'] . "</p>";
    echo "<p>Soyad: " . $ogrenci['soyad'] . "</p>";
    echo "<p>Email: " . $ogrenci['email'] . "</p>";
    echo "<p>Okul Numarası: " . $ogrenci['okul_no'] . "</p>";
    echo "<p>Telefon: " . $ogrenci['telefon'] . "</p>";
    echo "<p>Sınıf: " . $ogrenci['sinif'] . "</p>";
    echo "<p>Puan: " . $ogrenci['puan'] . "</p>";
} else {
    echo "Öğrenci bulunamadı.";
}
?>
