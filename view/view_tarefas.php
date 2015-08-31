<!DOCTYPE html>
<html>
	<head>
		<title>Aprendendo PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1>Gerenciador de tarefas</h1>
		<div >
		<form  action="cadastrarTarefa.php" style="width: 40%">	
			<fieldset >
				<legend>Nova Tarefa</legend>
				<label>Tarefa:<br><input type="text" name="nome"/></label>
				<br>
				<label>
					Descrição (opcional):<br><textarea name="descricao" style="margin: 0px; width: 451px; height: 81px;"></textarea>
				</label>
				<br>				
				<label>
					prazo (opicional):<br><input type="text" name="prazo">
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
				<br><br><input type="submit" value="cadastrar"  />
			</fieldset>
		</form>
		</div>
		<hr><br>
		<?php 
			include "listarTarefas.php";
		 ?>
	</body>
</html>