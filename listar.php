<?php
require_once ("funcoes.php");
if (!isAdmin()) {
    $_SESSION['msg'] = "Você precisa estar logado!";
    header('location: login.php');
}
index();
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
    <title>Listagem de usuários</title>

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

    <style>
        table, th,td,tr{
            border: 1px solid black;
            text-align: center;
            font-size: 20px;
            align-content: center;
            justify-content: center;
        }
    </style>

                <table> <tr>
                    <td>Id</td>
                    <td>E-mail</td>
                    <td>Login</td>
                    <td>Senha</td>
                    <td>Tipo</td>
                </tr>

    <?php if($contatos) : ?>
        <?php foreach ($contatos as $contato) : ?>


            <tr>
                <td> <?php echo $contato['id']; ?> </td>
                <td> <?php echo $contato['email']; ?> </td>
                <td> <?php echo $contato['login']; ?> </td>
                <td> <?php echo $contato['senha']; ?> </td>
                <td> <?php echo $contato['tipo']; ?> </td>
                <td>
                    <a href="alterar.php?id=<?php echo $contato['id']; ?>">Atualizar</a>
                    <a href="deletar.php?id=<?php echo $contato['id']; ?>">Remover</a>

                </td>
            </tr>
        <?php endforeach;?>
    <?php else: ?>
        <tr>
            <td>Nenhum Registro Encontrado</td>
        </tr>

    <?php endif; ?>

</table>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

