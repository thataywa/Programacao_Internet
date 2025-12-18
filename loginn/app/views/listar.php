
<!DOCTYPE html>
<html>
...

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>To-Do List (MVC)</title>
    <style>
        body{
            background-color: aquamarine;
        }
    </style>
</head>
<body>

<h1>TO-DO List (MVC)</h1>

<form action="index.php?route=criar" method="POST">
    <input type="text" name="descricao" placeholder="Descrição da tarefa">
    <button type="submit">Adicionar</button> <a href="index.php?route=login&id=<?php echo $tarefa['id']; ?>">
                    Voltar
                </a>
</form>

<h2>Suas tarefas</h2>

<?php if (!empty($tarefas)): ?>
    <ul>
        <?php foreach ($tarefas as $tarefa): ?>
            <li>
                <?php echo htmlspecialchars($tarefa['descricao']); ?>

                <a href="index.php?route=excluir&id=<?php echo $tarefa['id']; ?>">
                    Excluir
                </a>

                <a href="index.php?route=editar&id=<?php echo $tarefa['id']; ?>">
                    Editar
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Não há tarefas ainda!</p>
<?php endif; ?>

</body>
</html>
