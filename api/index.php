<?php

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $file = __DIR__ . '/../public' . $uri;

// if ($uri !== '/' && is_file($file)) {
//     $mimeTypes = [
//         'css'  => 'text/css',
//         'js'   => 'application/javascript',
//         'json' => 'application/json',
//         'png'  => 'image/png',
//         'jpg'  => 'image/jpeg',
//         'jpeg' => 'image/jpeg',
//         'gif'  => 'image/gif',
//         'svg'  => 'image/svg+xml',
//         'ico'  => 'image/x-icon',
//         'woff' => 'font/woff',
//         'woff2'=> 'font/woff2',
//         'ttf'  => 'font/ttf',
//         'pdf'  => 'application/pdf',
//     ];
//     $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
//     if (isset($mimeTypes[$ext])) {
//         header('Content-Type: ' . $mimeTypes[$ext]);
//         header('Cache-Control: public, max-age=31536000, immutable');
//         readfile($file);
//         exit;
//     }
// }

require __DIR__ . '/../public/index.php';
