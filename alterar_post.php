<?php
require_once ("funcoes.php");
editar_post();
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
    <title>Atualizar post</title>

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

    <form action="alterar_post.php?id=<?php echo $post['id']; ?>" method="post">

        <div class="form-row letra_2">
            <div class="form-group col-md-12">
                <label for="Titulo">Título</label>
                <input type="text" class="form-control letra_2" value="<?php echo $post['titulo']; ?>" name="post['titulo']" placeholder="Alterar título para o post">
            </div>
            <div class="form-group col-md-12">
                <label for="Descricao">Descrição</label>
                <input type="text" class="form-control letra_2" value="<?php echo $post['descricao']; ?>" name="post['descricao']" placeholder="Descrição da imagem">
            </div>
            <div class="form-group col-md-12">
                <input type="text" style="visibility: hidden;" class="form-control" name="post['usuario']" placeholder="Usuário" value="<?php echo $post['usuario']; ?>" >
            </div>

        </div>

        <button type="submit" class="btn btn-primary btnn">Alterar</button>
        <button type="reset" class="btn btn-primary btnn btn-danger">Limpar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
