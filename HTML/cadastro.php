<?php

require '../conexao.php';

$mensagem = "";
$conexao = new Conexao();
$con = $conexao->connection();


$res = pg_insert($con, 'pessoas', $_POST);

   $retorno  = array();
   if ($res) {
       $mensagem .= "<div class='alert alert-success'>";
       $mensagem .= "<div>Cadastro Realizado!</div>";
       $mensagem .= "</div>";
       $retorno['mensagem'] = $mensagem;
       $retorno['status'] = true;
   
   } else {
       $mensagem .= "<div class='alert alert-danger'>";
       $mensagem .= "<div>Cadastro deu erro!</div>";
       $mensagem .= "</div>";
       $retorno['mensagem'] = $mensagem;
       $retorno['status'] = false;
   }
   
   echo json_encode($retorno);


?>

