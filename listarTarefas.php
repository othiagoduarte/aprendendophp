<?php 

$lista_tarefa = buscar_todas_tarefas($conexao);

 ?>

<div>
	<table border="1" >
		<legend>Tarefas cadastradas</legend>
		<tr>
			<th>#</th>
			<th>Tarefa</th>
			<th>Descricao</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
			<th>Editar</th>
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
				<td> <a href="editar.php?id=<?php echo $tarefa['id']; ?>">Editar
					<br>
					 <a href="excluir.php?id=<?php echo $tarefa['id']; ?>">Excluir
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>