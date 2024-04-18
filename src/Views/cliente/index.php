<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
</head>
<body>
    <h1>.:| Lista de usuários |:.</h1>
         <?php foreach ($clientes as $cliente): ?>
            <h4><?= $cliente->getNome() ?> (<?= $cliente->getEmail() ?>) - <?= $cliente->getTipoPessoa()->value ?></h4>
        <?php endforeach; ?>
    <br>
    <a href="/">Home</a>
</body>
</html>
