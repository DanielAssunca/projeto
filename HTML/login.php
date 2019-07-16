<?php

if ($_POST) {
    require '../conexao.php';
    $mensagem = "";
    $conexao = new Conexao();
    $con = $conexao->connection();
    $res = pg_select($con, 'pessoas', $_POST);
}

$retorno  = array();
if ($res) {
    $mensagem .= "<div class='alert alert-success'>";
    $mensagem .= "<div>Login e Senha Validados com Sucesso!</div>";
    $mensagem .= "</div>";
    $retorno['mensagem'] = $mensagem;
    $retorno['status'] = true;

} else {
    $mensagem .= "<div class='alert alert-danger'>";
    $mensagem .= "<div>Usuario ou Senha Invalidos!</div>";
    $mensagem .= "</div>";
    $retorno['mensagem'] = $mensagem;
    $retorno['status'] = false;
}

echo json_encode($retorno);

?>
