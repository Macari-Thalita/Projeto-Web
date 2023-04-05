<?php
require_once ("funcoes.php");

adiciona();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastre-se!</title>

</head>
<body>
<div class="container fonte">
    <div class="row">
        <div class="col-md-12">

            <ul class="nav nav-fill letra">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts.php">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php if(isAdmin()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="listar.php">Listar Usuários</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>

            </ul>
        </div>
    </div>

    <form action="cadastro.php" method="post">

    <div class="form-row d-flex justify-content-center letra_2">
        <div class="form-group col-md">
            <label for="Email">Email</label>
            <input type="email" class="form-control letra_2" name="contato['email']" placeholder="Exemplo@gmail.com">
        </div>
        <div class="form-group col-md letra_2">
            <label for="Nome">Nome/Nick</label>
            <input type="text" class="form-control letra_2" name="contato['login']" placeholder="Login">
        </div>
        <div class="form-group col-md letra_2">
            <label for="senha">Senha</label>
            <input type="password" class="form-control letra_2" name="contato['senha']" placeholder="Senha">
        </div>
    </div>
        <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary btnn">Cadastrar</button>
    <button type="reset" class="btn btn-primary btnn btn-danger">Limpar</button>
        </div>
</form>
</div>

    <div class="col-md">
        <img src="img/Crunchy.png" class="img-fluid pic" alt="">
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
