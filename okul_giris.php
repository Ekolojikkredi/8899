<?php
// Okul bilgileri (bu bilgiler genellikle veritabanından alınır, burada örnek olarak hardcoded)
$okul_adi = "Torbalı Anadolu Lisesi";
$okul_sifre = "12345"; // Şifreyi güvenli şekilde saklamak gerekebilir

// Form verilerini al
$okul_adi_input = $_POST['okul_adi'];
$okul_sifre_input = $_POST['okul_sifre'];

// Okul adı ve şifresini doğrula
if ($okul_adi_input == $okul_adi && $okul_sifre_input == $okul_sifre) {
    echo "Giriş başarılı! <a href='ogrenci_kayit.html'>Öğrenci Kaydı Yap</a> veya <a href='ogrenci_goruntule.html'>Öğrenci Görüntüle</a>";
} else {
    echo "Geçersiz okul adı veya şifre. <a href='okul_giris.html'>Tekrar deneyin</a>";
}
?>
