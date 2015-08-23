<!DOCTYPE html>
<html>
	<head>
		<title>Aprendendo PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1>Gerenciador de tarefas</h1>
		
		<form >	
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>Tarefa:<input type="text" name="nome"/></label>
				<label>
					Descrição (opcional):
					<textarea name="descricao"></textarea>
				</label>
				<label>
					prazo (opicional):
					<input type="text" name="prazo">
				</label>
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
				<label>
					Tarefa Concluída
					<input type="checkbox" name="concluida" value="sim"/>	
				</label>
				<input type="submit" value="cadastrar"  />
			</fieldset>
		</form>
		<hr><br>
		<table border="1" >
			<legend>Tarefas cadastradas</legend>
			<tr>
				<th>#</th>
				<th>Tarefa</th>
				<th>Descricao</th>
				<th>Prazo</th>
				<th>Prioridade</th>
				<th>Concluída</th>
			</tr>
			<?php
				$indice = 0; 
				foreach ($lista_tarefa as $tarefa) : ?>
				<tr>
					<td> <?php echo $indice =  ($indice + 1) ?> </td>
					<td> <?php echo $tarefa['nome'] ?></td>
					<td> <?php echo $tarefa['descricao'] ?></td>
					<td> <?php echo traduzir_data_sistema($tarefa['prazo']) ?></td>
					<td> <?php echo traduzir_prioridade($tarefa['prioridade']) ?></td>
					<td> <?php echo traduzir_conclusao( $tarefa['concluida'] )  ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	
	</body>
</html>