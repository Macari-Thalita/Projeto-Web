<?php
// puxa o arquivo de configurações
require_once ("inc/config.php");
require_once (DBAPI);
session_start();

//criando 2 variaveis
$contato = null;         // armazena um único contato

$contatos = null;        // armazenas vários contatos e vários dados dentro dela

$post = null;

$posts = null;


function adiciona(){
    if (!empty($_POST['contato'])){                    //variavel criado no campo "name"
        $contato = $_POST['contato'];                 // captura da variável "POST" para variavel 'contato'
        cadastrar("logins", $contato);
        header("location: index.php");
    }
}
function index(){
    global $contatos;
    $contatos = listar_tudo("logins");
}

function editar(){
    if(isset($_GET['id'])){
        $codigo = $_GET['id'];

        if(isset($_POST['contato'])){
            $contato = $_POST['contato'];
            atualizar('logins', $codigo, $contato);
            header('location: listar.php');
        }else{
            global $contato;
            $contato = listar('logins', $codigo);
        }


    }else{
        header('location : index.php');


    }
}

function deletar($codigo = null) {
    global $contato;
    $contato = remover('logins', $codigo);
    header('location: listar.php');
}

// CADASTRO DE LOGINS
function reg_login(){
if (!empty($_POST['cliente'])) {
$cliente = $_POST['cliente'];
cadastrar('logins', $cliente);
header('location: index.php');
    }

}
// Função para verificar se existe usuário logado
function isLoggedIn(){
if (isset($_SESSION['user'])) {
return true;
}else{
return false;
}

}
// Função para desconectar o usuário
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['user']);
header("location: login.php");
}

if (isset($_POST['login_btn'])) {
login($_POST['login'], $_POST['senha']);
}

// Função para verificar se o usuário logado é Administrador
function isAdmin(){
if (isset($_SESSION['user']) && $_SESSION['user']['tipo'] == 'Administrador' ) {
return true;
}else{
return false;
}

}

function adiciona_post(){
    if (!empty($_POST['posts'])){
        $posts = $_POST['posts'];
        cadastrar("posts", $posts);
        header("location: index.php");
    }
}

function index_post(){
    global $posts;
    $posts = listar_tudo("posts");
}

function editar_post(){
    if(isset($_GET['id'])){
        $codigo = $_GET['id'];

        if(isset($_POST['post'])){
            $post = $_POST['post'];
            atualizar('posts', $codigo, $post);
           header('location: index.php');
        }else{
            global $post;
            $post = listar('posts', $codigo);
        }


    }else{
        header('location : index.php');


    }
}

function deletar_post($codigo = null) {
    global $post;
    $post = remover('posts', $codigo);
    header('location: index.php');
}



?>

