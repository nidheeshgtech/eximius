<?php
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$normalizedPath = rtrim($requestPath, '/');

if ($normalizedPath === '') {
    $normalizedPath = '/';
}

$routeMap = [
    '/' => __DIR__ . '/../index.php',
    '/index' => __DIR__ . '/../index.php',
    '/index.php' => __DIR__ . '/../index.php',
    '/about' => __DIR__ . '/../about.php',
    '/about.php' => __DIR__ . '/../about.php',
    '/contact' => __DIR__ . '/../contact.php',
    '/contact.php' => __DIR__ . '/../contact.php',
    '/admissions' => __DIR__ . '/../admissions.php',
    '/admissions.php' => __DIR__ . '/../admissions.php',
    '/opportunities' => __DIR__ . '/../opportunities.php',
    '/opportunities.php' => __DIR__ . '/../opportunities.php',
];

$target = $routeMap[$normalizedPath] ?? __DIR__ . '/../index.php';

if (is_file($target)) {
    include $target;
    exit;
}

http_response_code(404);
echo 'Page not found';
