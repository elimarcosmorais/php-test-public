# PHP Test

Projeto de exemplo simples em PHP 8.5 com duas páginas.

## Arquivos

- `index.php` — página inicial com mensagem de boas-vindas e link para a página "Sobre".
- `about.php` — página com informações fictícias e link para voltar à página inicial.
- `header.php` / `footer.php` — cabeçalho e rodapé HTML compartilhados, incluídos nas páginas via `require`.
- `style.css` — estilos das páginas.
- `composer.json` — declara a versão mínima do PHP (`>=8.5`).

## Requisitos

- PHP 8.5 ou superior

## Como executar

```bash
php -S localhost:8000
```

Depois acesse <http://localhost:8000> no navegador.
