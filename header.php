<?php
declare(strict_types=1);

/** @var string $titulo Definido pela página que inclui este arquivo. */
$titulo ??= 'PHP Test';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1><?= htmlspecialchars($titulo) ?></h1>
