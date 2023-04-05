<?php
require_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Faça login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="--><?php //echo BASEURL; ?><!--">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid fonte">
    <div class="row">
    </div>
    <div class="container">
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

                <h1>Faça login ou cadastre-se!</h1>

                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col">
                            <br>
                            <label for="logininput" class="letra_2">Nome/Nick</label>
                            <input type="text" name="login" class="form-control letra_2" id="logininput" placeholder="Digite seu login">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <br>
                            <label for="senhainput" class="letra_2">Senha</label>
                            <input type="password" name="senha" class="form-control letra_2" id="senhainput" placeholder="Senha">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <br>
                            <button type="submit" name="login_btn" class="btn btn-primary btnn">Entrar</button>
                            <button type="submit" class="btn btn-danger btnn">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>

