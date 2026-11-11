<?php
declare(strict_types=1);

$titulo = 'Bem-vindo!';
$mensagem = 'Olá! Este é um projeto de exemplo em PHP 8.5. Fique à vontade para explorar.';

require __DIR__ . '/header.php';
?>
        <p><?= htmlspecialchars($mensagem) ?></p>
        <p><a class="botao" href="about.php">Saiba mais sobre nós</a></p>
<?php require __DIR__ . '/footer.php'; ?>
