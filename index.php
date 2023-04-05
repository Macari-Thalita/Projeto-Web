<?php
require_once "inc/config.php";
require_once "funcoes.php";
require_once DBAPI;

index_post();

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
    <title>Terra 2D</title>
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

    <?php  if (isset($_SESSION['user'])) : ?>
    <label>Usuário:</label>
        <strong class=""><?php echo $_SESSION['user']['login']; ?></strong>
        <small>
            <i style="color: lightskyblue;">(<?php echo ucfirst($_SESSION['user']['tipo']); ?>)</i>
            <br>
            <a class="mrg_bottom" href="index.php?logout='1'" style="color: red;">Sair</a>
        </small>
    <?php endif ?>


<?php
$db = abre_banco();

if ($db){
    echo'<h1 class="fonte">Bem-vindo a Terra 2D!</h1>';
}   else  {
    echo'<h1>Não Foi Possível conectar!</h1>';
}
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner mrg_bottom">
        <div class="carousel-item active img-fluid">
            <img src="img/carousel01.png" class="d-block w-100 " alt="">
        </div>
        <div class="carousel-item img-fluid">
            <img src="img/carousel02.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item img-fluid">
            <img src="img/carousel03.png" class="d-block w-100" alt="">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <?php if($posts) : ?>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
        <?php foreach ($posts as $post) : ?>

            <h1><?php echo $post['titulo'];?></h1>

                <img src="uploads/<?php echo $post['img'] ?>" class="img-fluid mx-auto d-block pic" alt="...">

                <h3 class="text-center"><?php echo $post['descricao'];?></h3>

                <h3 class="text-center cor_usuario"><?php echo $post['usuario']; ?></h3>

            <?php if(isAdmin()) : ?>
                    <a class="mrg btn btn-primary" href="alterar_post.php?id=<?php echo $post['id']; ?>">Atualizar</a>
                    <a class="mrg btn btn-primary btn-danger" href="deletar_post.php?id=<?php echo $post['id']; ?>">Remover</a>
            <?php endif; ?>
        <?php endforeach;?>
            </div>
        </div>

    <?php else: ?>
        <tr>
            <td>Nenhum Registro Encontrado</td>
        </tr>
    <?php endif; ?>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
