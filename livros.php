<?php
	$action = "inserir";

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Bem-vindo a nossa Livraria </h1>
	
	
	<form  method = "POST" action = " salvarLivros.php?<?php echo $action; ?>">
		<label  for="txtNome"> Nome do Livro: </label>
        <input  type="text" name="txtNome" required /> <br><br>
		<label  for="txtQtd"> Quantidade do exemplar: </label>
        <input  type="number" name="txtQtd" required />
		
        <br>
        <input  type="submit" value="Salvar" />
        <input  type="reset" value = "Limpar" />
    </form >
	
	<hr>
	
	<table id="tbl_livros">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Quantidade</th>
			
		</tr>
		
		<?php
			include_once 'clsConexao.php';
			$query = "SELECT * FROM livros";
			$result = Conexao::consultar($query);
			
			while($cat = mysqli_fetch_array($result)) { //linhas da tabela
				echo '<tr>';
				echo '	<td>'.$cat['id'].'</td>';
				echo '	<td>'.$cat['nome'].'</td>';
				echo '	<td>'.$cat['quantidade'].'</td>';
				echo '</tr>';
			}
		?>
		
	</table>
    
</body>
</html>