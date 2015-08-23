<?php 
	
	$lista_tarefa = array();

	session_start(); 
			
	if (isset($_GET['nome'])) {
		
		$_SESSION['lista_tarefa'][] = $_GET['nome'];
					
	}
		
	if (isset($_SESSION['lista_tarefa'])) {
		
		$lista_tarefa = $_SESSION['lista_tarefa']; 

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Aprendendo PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1>Gerenciador de tarefas</h1>
		<form>	
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>Tarefa:
					<input type="text" name="nome"/>
					<input type="submit" value="cadastrar"  />
				</label>

			</fieldset>
		</form>
			
		<table >
			<tr>
				<td>Tarefa</td>
			</tr>
			<?php foreach ($lista_tarefa as $tarefa) : ?>
				<tr>
					<td> <?php echo $tarefa ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>