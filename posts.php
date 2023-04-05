<?php
require_once ("funcoes.php");
if (!isLoggedIn()) {
    $_SESSION['msg'] = "Você precisa estar logado!";
    header('location: login.php');
}
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
    <title>Crie seu post!</title>

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

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <h1 class="mrg_bottom2">Crie seus posts aqui! ╰(*´︶`*)╯♡</h1>
        <div class="form-row d-flex justify-content-center col-md">
            <div class="form-group col-md-12">
                <label class="h1" for="Titulo">Título</label>
                <input type="text" class="form-control letra_2" name="posts['titulo']" placeholder="Crie um título incrível!">
            </div>
            <div class="form-group col-md-12">
                <label class="h1" for="Descricao">Descrição</label>
                <input type="text" class="form-control letra_2" name="posts['descricao']" placeholder="Descreva sua arte">
            </div>
            <div class="form-group col-md-12">
                <input type="text" style="visibility: hidden;" class="form-control letra_2" name="posts['usuario']" placeholder="Usuário" value="<?php echo $_SESSION['user']['login']; ?>" >
                <input type="text" style="visibility: hidden;" class="form-control letra_2" name="posts['img']" id="img" placeholder="Imagem" >
            </div>
            <h3>Faça upload do seu arquivo: (๑˘︶˘๑)</h3>
                <div class="form-row col-md-6">
                    <div class="col mrg_top">
                        <input type="text" class="nomeArquivo form-control" disabled>
                    </div>

                    <div class="col mrg_top">
                        <label for="fileToUpload" class="btn btn-primary btnn">Selecionar</label>
                        <button type="submit" class="btn btn-primary btnn">Cadastrar</button>
                        <button type="reset" class="btn btn-primary btnn btn-danger">Limpar</button>
                        <input style="visibility: hidden;" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

        </div>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $('#fileToUpload').change(function(e) {
                $('.nomeArquivo').val($(this).val());
                var nome = e.target.files[0].name;
                $('#img').val(nome);
            });

        });
    </script>
</body>
</html>
