
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#eeede9">

    <title>Montis Refúgios</title>

    <link rel="stylesheet" href="/assets/css/estilo.css">
</head>
<body>

<header class="navbar">
    <a href="/index.php" class="logo">
        <img src="/img/logo.png"
             alt="Logo da Montis Refúgios">
    </a>

    <nav aria-label="Navegação principal">
        <a href="/index.php"
           class="<?= $paginaAtual === 'index.php' ? 'ativo' : '' ?>">
            Página Inicial
        </a>

        <a href="/chales.php"
           class="<?= $paginaAtual === 'chales.php' ? 'ativo' : '' ?>">
            Chalés
        </a>

        <a href="/avaliacoes.php"
           class="<?= $paginaAtual === 'avaliacoes.php' ? 'ativo' : '' ?>">
            Avaliações
        </a>

        <?php if (!empty($_SESSION['usuario_id'])): ?>
            <a href="/perfil.php">Minha conta</a>
        <?php else: ?>
            <a href="/login.php" class="btn-login">Login</a>
        <?php endif; ?>
    </nav>
</header>
