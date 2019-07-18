<?php

require '../conexao.php';

$conexao = new Conexao();
$con = $conexao->connection();


   $res = pg_insert($con, 'pessoas', $_POST);

   $res  = array();
   if ($res) {
       $mensagem .= "<div class='alert alert-success'>";
       $mensagem .= "<div>Cadastro Realizado com Sucesso!</div>";
       $mensagem .= "</div>";
       $retorno['mensagem'] = $mensagem;
       $retorno['status'] = true;
   
   } else {
       $mensagem .= "<div class='alert alert-danger'>";
       $mensagem .= "<div>Cadastro não foi Gravado!</div>";
       $mensagem .= "</div>";
       $retorno['mensagem'] = $mensagem;
       $retorno['status'] = false;
   }
   
   echo json_encode($retorno);


?>

