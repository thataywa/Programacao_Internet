<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

<?php if (!isset($_SESSION['usuario_id'])): ?>

    <h1>Acesso restrito</h1>

    <p>
        Você não está logado.<br>
        Apenas usuários cadastrados podem acessar.
    </p>

    <a href="/index.php?route=login">
    <button>Ir para o Login</button>
</a>

<?php else: ?>

    <h1>Painel do Sistema</h1>

    <p>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?></p>

    <p>Você já está autenticado no sistema.</p>

<?php endif; ?>

</body>
</html>