<?php
declare(strict_types=1);

$titulo = 'Sobre nós';
$sobre = 'A Empresa Fictícia Ltda. foi fundada em 2020 com a missão de criar soluções simples e criativas para problemas imaginários.';

require __DIR__ . '/header.php';
?>
        <p><?= htmlspecialchars($sobre) ?></p>
        <p><a class="botao" href="index.php">Voltar para a página inicial</a></p>
<?php require __DIR__ . '/footer.php'; ?>
