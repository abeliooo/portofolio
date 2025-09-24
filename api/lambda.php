<?php

/**
 * VERCEL-PHP-LARAVEL
 *
 * This file is the single entry point for the Vercel serverless environment.
 * It prepares the Laravel application for the read-only filesystem.
 */

// --- Handle CORS Pre-flight Requests ---
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
    exit(0);
}

// --- Project Root ---
chdir(dirname(__DIR__));

// --- Vercel /tmp Directory Setup ---
// The Vercel filesystem is read-only, except for the /tmp directory.
// We must create the necessary storage and cache directories there.
$storagePath = '/tmp/storage';
$cachePath = '/tmp/bootstrap/cache';

// Create the directories if they don't exist.
// The recursive flag (true) creates parent directories as needed.
if (!is_dir($storagePath . '/framework/views')) {
    mkdir($storagePath . '/framework/views', 0755, true);
}
if (!is_dir($storagePath . '/framework/cache/data')) {
    mkdir($storagePath . '/framework/cache/data', 0755, true);
}
if (!is_dir($storagePath . '/framework/sessions')) {
    mkdir($storagePath . '/framework/sessions', 0755, true);
}
if (!is_dir($storagePath . '/logs')) {
    mkdir($storagePath . '/logs', 0755, true);
}
if (!is_dir($cachePath)) {
    mkdir($cachePath, 0755, true);
}

// --- Constants & Autoloader ---
define('LARAVEL_START', microtime(true));
require __DIR__ . '/../vendor/autoload.php';

// --- Bootstrap The Application ---
$app = require_once __DIR__ . '/../bootstrap/app.php';

// --- Configure for Vercel's Writable /tmp Directory ---
// Bind the new paths to the Laravel container. This is the crucial part.
$app->useStoragePath($storagePath);
$app->useBootstrapPath($cachePath);

// --- Handle The Request ---
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request\capture()
);
$response->send();
$kernel->terminate($request, $response);

