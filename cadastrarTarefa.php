<?php 
	include "tarefas.php";
	$novatarefa = array();	
	$novatarefa = $_SESSION['tarefa'];
	gravar_tarefas($conexao,$novatarefa);
	