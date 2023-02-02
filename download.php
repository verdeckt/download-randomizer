<?php

if (isset($_GET['download'])) {
    $file_url = 'http://your.website/file.exe';
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename=YourName_" . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10) . ".exe");
    readfile($file_url);
    exit;
}

?>

<a href="?download=1">Download</a>
