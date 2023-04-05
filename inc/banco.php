
<?php
function abre_banco(){
    try {
        $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $con;

    } catch (Exception $e) {
        echo $e-> getMessage ();
        return null;

    }
}
function fecha_banco($con){

    try{
        mysqli_close($con);

    }catch (Exception $e){
        echo $e-> getMessage();
    }

}
function cadastrar($tabela= null, $dados= null){
    $db= abre_banco();
    $colunas= null;
    $valores= null;

    foreach ($dados as $chave => $valor){
        $colunas .= trim($chave,"'"). ",";
        $valores .= "'$valor',";
    }

    $colunas = rtrim($colunas,",");
    $valores = rtrim($valores,",");
    $sql = "INSERT INTO " . $tabela ."($colunas)" . " values " ."($valores);";
//    var_dump($dados);

    try{
        if($db->query($sql)=== true){
            $_SESSION['message'] = "Cadastrado com Sucesso!!";
            $_SESSION['type'] = "Sucesso";

        }else{
            $_SESSION['message'] = "Não foi possível cadastrar, verifique!!";
            $_SESSION['type'] = "erro";

        }

    }catch (Exception $e){
        echo $e->getMessage();
    }
    fecha_banco($db);

}

function listar($tabela =null, $codigo =null){

    $db = abre_banco();
    $encontrado = null;

    try{
        if($codigo){
            $sql="SELECT * FROM " . $tabela . " WHERE id= ". $codigo;
            $resultado = $db-> query($sql);

            if ($resultado-> num_rows >0){
                $encontrado = $resultado->fetch_assoc();
            }

        }else{
            $sql= "SELECT * FROM " . $tabela . " order by id desc ";
            $resultado = $db-> query($sql);

            if($resultado -> num_rows >0){

                $encontrado = $resultado-> fetch_all(MYSQLI_ASSOC);


            }
        }
    }catch(Exception $e){
        session_start();
        $_SESSION['message'] = $e->getMessage();
        $_SESSION['type']= 'erro';
    }
    fecha_banco($db);
    return $encontrado;
}

function listar_tudo($tabela){
    return listar($tabela);
}

function atualizar( $tabela = null, $codigo = null , $dados =null) {

    $db = abre_banco();
    $items = null;

    foreach ($dados as $chave => $valor){
        $items .= trim($chave, "'") . "='$valor',";
    }

    $items = rtrim($items, ',');

    $sql = "UPDATE " . $tabela;

    $sql .= " SET $items";
    $sql .= " WHERE id = " . $codigo .';';

    try {
        $db->query($sql);
        $_SESSION['message']= "Registro atualizado com sucesso.";
        $_SESSION['type']= "Sucesso!";

    }catch (Exception $e){


        $_SESSION['message']= "Não foi possível atualizar registro";
        $_SESSION['type']= "Erro!";

    }
    fecha_banco($db);
}
function remover($tabela = null, $codigo = null){
    $db = abre_banco();

    try{
        if ($codigo){
            $sql ="DELETE FROM ". $tabela . " WHERE id = " . $codigo;
            $resultado = $db->query($sql);
            if($resultado = $db->query($sql)){
                session_start();
                $_SESSION['message']= "Registro removido com sucesso!";
                $_SESSION['type']= "Sucesso";

            }

        }
    }catch (Exception $e){
        $_SESSION['message']= $e->getMessage();
        $_SESSION['type'] = "Erro!";
    }
    fecha_banco($db);
}
function login($login = null, $senha = null){
    $database = abre_banco();
    $query = "SELECT * FROM logins WHERE login='$login' AND senha='$senha'
LIMIT 1";
    $results = mysqli_query($database, $query);
    if (mysqli_num_rows($results) == 1) { // usuário encontrado
// Verifica se é administrador e podemos
// direcionar para outra página logo após o login
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['tipo'] == 'Administrador') {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "Você está logado";
            header('location: index.php');
        }else{
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "Você está logado";
            header('location: index.php');
        }
    }
    fecha_banco($database);
}

?>
