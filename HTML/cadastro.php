<?php

require '../conexao.php';

$conexao = new Conexao();
$con = $conexao->connection();


   $res = pg_insert($con, 'pessoas', $_POST);


 if ($res) {
    echo "CADASTRO SALVO COM SUCESSO!!\n";
}
else {
    echo "O usuário deve ter inserido entradas inválidas\n";
}


?>