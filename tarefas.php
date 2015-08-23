<?php 
	
	session_start(); 
	
	include "data_base.php";
	
	if (isset($_GET['nome']) && $_GET['nome'] != '') {
		
		$tarefa = array();

		$tarefa['nome'] = $_GET['nome'];
		
		if (isset($_GET['descricao'])) {
			$tarefa['descricao'] = $_GET['descricao'];	
		}else{
			$tarefa['descricao'] = '';
		}

		if (isset($_GET['prazo'])) {
			$tarefa['prazo'] = $_GET['prazo'];	
		}else{
			$tarefa['prazo'] = '';
		}
		
		if (isset($_GET['prioridade'])) {
			$tarefa['prioridade'] = $_GET['prioridade'];	
		}else{
			$tarefa['prioridade'] = '';
		}
		
		if (isset($_GET['concluida'])) {
			$tarefa['concluida'] = $_GET['concluida'];	
		}else{
			$tarefa['concluida'] = 'não';
		}
		
		//$_SESSION['lista_tarefa'][] = $tarefa;			
		gravar_tarefas($tarefa);
	}	
	 
	// //Atualizando a lista de tarefas salva na sessão
	// if (isset($_SESSION['lista_tarefa'])) {
		
	// 	$lista_tarefa = $_SESSION['lista_tarefa']; 

	// }else{

	// 	$lista_tarefa = array();		
				
	// }	
	
	$lista_tarefa = buscar_todas_tarefas($conexao);

	include "view_tarefas.php";