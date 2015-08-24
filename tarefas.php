<?php 
	include "util/util.php";
	include "bd/data_base.php";
	
	session_start(); 

	if (isset($_GET['nome']) && $_GET['nome'] != '') {
		
		$tarefa = array();

		$tarefa['nome'] = $_GET['nome'];
		
		if (isset($_GET['descricao'])) {
			$tarefa['descricao'] = $_GET['descricao'];	
		}else{
			$tarefa['descricao'] = '';
		}

		if (isset($_GET['prazo'])) {
			$tarefa['prazo'] = traduzir_data_mysql($_GET['prazo'] );	
			
		}else{
			$tarefa['prazo'] = '';
		}
		
		if (isset($_GET['prioridade'])) {
			$tarefa['prioridade'] = traduzir_prioridade( $_GET['prioridade']);	
		}else{
			$tarefa['prioridade'] = 0;
		}
		
		if (isset($_GET['concluida']) ) {
			$tarefa['concluida'] =1;	
		}else{
			$tarefa['concluida'] = 0;
		}
		
		$_SESSION['tarefa'][] = $tarefa;			
		
		gravar_tarefas($conexao,$tarefa);
	
	}	
	
	$lista_tarefa = buscar_todas_tarefas($conexao);
	
	$_SESSION['lista_tarefa'][] = $lista_tarefa ;

	include "view/view_tarefas.php";