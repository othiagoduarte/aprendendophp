<?php 
	include "util/util.php";
	include "bd/data_base.php";
	$tarefa = array();
	$tarefa = buscar_tarefas_byId($conexao,12);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Aprendendo PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1>Gerenciador de tarefas</h1>
		<div >
		<form >	
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>Tarefa:<br><input type="text" name="nome" value= <?php echo $tarefa['nome'] ; ?> 	/></label>
				<br>
				<label>
					Descrição (opcional):<br><textarea name="descricao" value= <?php echo $tarefa['nome'] ; ?> 	></textarea>
				</label>
				<br>				
				<label>
					prazo (opicional):<br><input type="text" name="prazo" value= <?php echo $tarefa['nome'] ; ?> 	>
				</label>
				<br>
				<fieldset>
					<legend>
						Prioridade
					</legend>
					<label>
						<input type="radio" name="prioridade" value="baixa" checked>
						Baixa
					</label>
					<label>
						<input type="radio" name="prioridade" value="media" />
						Media
					</label>
					<label>
						<input type="radio" name="prioridade" value="alta" />
						Alta
					</label>
				</fieldset>
				<br>
				<label>
					Tarefa Concluída
					<input type="checkbox" name="concluida" value="sim"/>	
				</label>
				<br><br><input type="submit" value="Salvar"  />
			</fieldset>
		</form>
		</div>
	</body>
</html>



