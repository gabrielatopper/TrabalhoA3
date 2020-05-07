<?php

$nome = $_POST['txtNome'];

include "clsConexao.php";

if ( isset ( $_REQUEST ['inserir'])) {
    $query = "INSERT INTO livros (nome) VALUES ('$nome')";
    Conexao::executar( $query );
    header ( "Location: livros.php" );
}

?>