<?php
require_once('funcoes.php');

if (isset($_GET['id'])) {
    deletar_post($_GET['id']);
} else {
    die("ERRO: ID não definido.");
}

