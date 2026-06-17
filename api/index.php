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
    '/leadership' => __DIR__ . '/../leadership.php',
    '/leadership.php' => __DIR__ . '/../leadership.php',
    '/learning-journey' => __DIR__ . '/../learning-journey.php',
    '/learning-journey.php' => __DIR__ . '/../learning-journey.php',
    '/learning-partners' => __DIR__ . '/../learning-partners.php',
    '/learning-partners.php' => __DIR__ . '/../learning-partners.php',
    '/specialists' => __DIR__ . '/../specialists.php',
    '/specialists.php' => __DIR__ . '/../specialists.php',
    '/alumni' => __DIR__ . '/../alumni.php',
    '/alumni.php' => __DIR__ . '/../alumni.php',
    '/faq' => __DIR__ . '/../faq.php',
    '/faq.php' => __DIR__ . '/../faq.php',
];

$target = $routeMap[$normalizedPath] ?? __DIR__ . '/../index.php';

if (is_file($target)) {
    include $target;
    exit;
}

http_response_code(404);
echo 'Page not found';
