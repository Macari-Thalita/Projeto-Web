
<?php
require_once ('inc/config.php');
require_once DBAPI;

require_once("funcoes.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
var_dump($target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verifica se o arquivo selecionado é uma imagem
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Imagem selecionada - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "O arquivo selecionado não é uma imagem.<br>";
        $uploadOk = 0;
    }
}
// Verifica se o arquivo já existe na pasta
//if (file_exists($target_file)) {
//    echo "O arquivo já existe no servidor.<br>";
//    $uploadOk = 0;
//}
// Verifica o tamanho do arquivo - Limite de 10mb
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Arquivo muito grande!<br>";
    $uploadOk = 0;
}
// Permite apenas determinados tipos de arquivo - jpg, png, jpeg e gif
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "São aceitas somente imagens JPG, JPEG, PNG e GIF.";
    $uploadOk = 0;
}
// Verificação de erros. Se $uploadOk=0 ocorreu algum erro
if ($uploadOk == 0) {
    echo "Erro: não foi possível fazer upload.";
// Se não ocorreu problemas, tenta fazer upload
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Arquivo ". basename( $_FILES["fileToUpload"]["name"]). " enviado.";
        adiciona_post();
    }

}
?>
