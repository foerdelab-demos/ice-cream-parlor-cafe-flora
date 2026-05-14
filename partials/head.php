<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($pageTitle)) {
    $pageTitle = '[Firmenname]';
}

if (!isset($pageDescription)) {
    $pageDescription = 'Reinigung in Flensburg an der Förde';
}

if (!isset($basePath)) {
    $scriptName = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? ''));
    if ($scriptName === '' || $scriptName[0] !== '/') {
        $scriptName = '/';
    }
    if (strpos($scriptName, '..') !== false) {
        $scriptName = '/';
    }
    $basePath = rtrim(dirname($scriptName), '/');
    if (substr($basePath, -6) === '/pages') {
        $basePath = substr($basePath, 0, -6);
    }
    if ($basePath === '/' || $basePath === '.' || $basePath === '\\') {
        $basePath = '';
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($basePath) ?>/assets/css/style.css">
</head>
<body>
