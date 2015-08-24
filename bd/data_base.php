<?php 
	
	$bdServidor = "127.0.0.1";
	$bdUsuario = "master";
	$bdSenha = "master";
	$bdBanco = "tarefas";

	$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

	if ( mysqli_connect_errno( $conexao) ) {

		echo "Erro ao conectar a base de dados";
		
		die();

	}

function buscar_todas_tarefas($cnx){

	$tarefas = array();
	$query = 'SELECT * FROM TAREFAS';
	$resultado = mysqli_query( $cnx, $query);
	
	while ($tarefa = mysqli_fetch_assoc($resultado)) {
	 	$tarefas[] = $tarefa;	
		
	}

	return $tarefas;

}

function buscar_todas_tarefas_byId($cnx,$id){

	$tarefas = array();
	$query = 'SELECT * FROM TAREFAS WHERE ID = '.$id;
	$resultado = mysqli_query( $cnx, $query);
	
	while ($tarefa = mysqli_fetch_assoc($resultado)) {
	 	$tarefas[] = $tarefa;	
	}

	return $tarefas;

}
function gravar_tarefas($cnx,$tarefa){

	$query = "INSERT INTO TAREFAS (Nome, Descricao, prioridade , prazo, concluida)
			  values('{$tarefa['nome']}'
			  	    ,'{$tarefa['descricao']}' 
			  	    , {$tarefa['prioridade']}
					,'{$tarefa['prazo']}'
					, {$tarefa['concluida']}
			  	    ) ";
	echo $query;
	mysqli_query($cnx,$query);
}