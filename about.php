<?php
declare(strict_types=1);

$titulo = 'Sobre nós';
$sobre = 'A Empresa Fictícia Ltda. foi fundada em 2020 com a missão de criar soluções simples e criativas para problemas imaginários.';
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
    <p><?= htmlspecialchars($sobre) ?></p>
    <p><a href="index.php">Voltar para a página inicial</a></p>
</body>
</html>
