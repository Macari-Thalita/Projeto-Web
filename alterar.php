<?php
require_once ("funcoes.php");
editar();
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

    <title>Alterar Usuário</title>
</head>
<body>
<div class="container fonte">
    <div class="row">
        <div class="col-sm">

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
                <?php if(isAdmin()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="listar.php">Listar Usuários</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>
        </div>
    </div>

<h1>Cadastro</h1>


<form action="alterar.php?id=<?php echo $contato['id']; ?>" method="post">
    <input class="form-row col-md letra_2" type="email" name="contato['email']" value="<?php echo $contato['email']; ?>" placeholder="E-mail"><br>
    <input class="form-row col-md letra_2" type="text" name="contato['login']" value="<?php echo $contato['login']; ?>" placeholder="Login"><br>
    <input class="form-row col-md letra_2" type="password" name="contato['senha']" value="<?php echo $contato['senha']; ?>" placeholder="Senha"><br>
    <select name="contato['tipo']" class="form-control letra_2" id="tipo">
        <option selected>Usuário</option>
        <option>Administrador</option>
    </select>
    <button type="submit" class="btn btn-primary btnn letra_2">Alterar</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html
