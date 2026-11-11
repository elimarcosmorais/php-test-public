<?php
declare(strict_types=1);

$titulo = 'Bem-vindo!';
$mensagem = 'Olá! Este é um projeto de exemplo em PHP 8.5. Fique à vontade para explorar.';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($titulo) ?></h1>
    <p><?= htmlspecialchars($mensagem) ?></p>
    <p><a href="about.php">Saiba mais sobre nós</a></p>
</body>
</html>
