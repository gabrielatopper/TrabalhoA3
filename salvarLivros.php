<?php

$nome = $_POST['txtNome'];
$autor = $_POST['txtNomeAutor'];
$quantidade = $_POST['txtQtd'];


include "clsConexao.php";

if ( isset ( $_REQUEST ['inserir'])) {
    $query = "INSERT INTO livros (nome) VALUES ('$nome')";
	$query = "INSERT INTO livros (autor) VALUES ('$autor')";
	$query = "INSERT INTO livros (quantidade) VALUES ('$quantidade')";
    Conexao::executar( $query );
    header ( "Location: livros.php" );
}

?>