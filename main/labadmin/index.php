<?php

/**
 * Laravel - Lab Admin Panel Entry Point
 *
 * This file serves as the entry point for the Lab Admin Panel
 * and redirects all requests to the public directory.
 */

// Redirect to public directory
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Check if we're already in public directory
if (strpos($_SERVER['REQUEST_URI'], '/public/') !== false) {
    // Already in public, just include the public index
    require_once __DIR__ . '/public/index.php';
    exit;
}

// For assets, redirect to public
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico|svg|woff|woff2|ttf|eot)$/', $uri)) {
    $public_file = __DIR__ . '/public' . $uri;
    if (file_exists($public_file)) {
        // Set proper content type
        $ext = pathinfo($uri, PATHINFO_EXTENSION);
        $content_types = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'svg' => 'image/svg+xml',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        if (isset($content_types[$ext])) {
            header('Content-Type: ' . $content_types[$ext]);
        }
        
        readfile($public_file);
        exit;
    }
}

// For all other requests, load Laravel
require_once __DIR__ . '/public/index.php';