<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Clientes</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body class="container">
<h1>.:| Cadastro de Clientes |:.</h1>

<form action="/cliente/insertCliente" method="get">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>

    <label>Tipo Pessoa:</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoPessoa" id="pessoaFisica" name="tipoPessoa" value="1">
        <label class="form-check-label" for="pessoaFisica">
            Pessoa Física
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoPessoa" id="PessoaJuridica" value="2">
        <label class="form-check-label" for="pessoaJuridica">
            Pessoa Jurídica
        </label>
    </div>

    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
<br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo</th>
    </tr>
    </thead>
    <tbody>

          <?php foreach ($clientes as $cliente): ?>
                  <tr>
                      <th scope="row"><?= $cliente["id"] ?></th>
                      <td><?= $cliente["nome"] ?></td>
                      <td><?= $cliente["email"] ?></td>
                      <td><?php
                          echo $cliente["tipopessoa"]==1?"Pessoa Física":"Pessoa Jurídica"
                          ?></td>
                  </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    <br>
    <a href="/">Home</a>
</body>
</html>
