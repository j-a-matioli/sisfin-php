<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
</head>
<body>
    <h1>.:| Lista de usuários |:.</h1>
         <?php foreach ($users as $user): ?>
            <h4><?= $user->name ?> (<?= $user->email ?>) - <?= $user->tipoPessoa ?></h4>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
    