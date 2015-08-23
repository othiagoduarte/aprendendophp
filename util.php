<?php 

function traduzir_prioridade($codigo){

	$prioridade = "";
	
	switch($codigo){

		case "0":
			$prioridade = "Baixa";
			break;
		case "1":
			$prioridade = "Média";
			break;
		case "2":
			$prioridade = "Alta";
			break;
		case "baixa":
			$prioridade = "0";
			break;
		case "media":
			$prioridade = "1";
			break;
		case "alta":
			$prioridade = "2";
			break;

	}
	return $prioridade;

}
function traduzir_conclusao($codigo){

	$concluida = "";
		
	switch($codigo){

		case 0:
			$concluida = "Não";
			break;
		case 1:
			$concluida = "Sim";
			break;
		}
	
	return $concluida;

}

function traduzir_data_mysql($data){

	if ($data == "") { 
		return "";	
	}

	$dados = explode("/", $data);

	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

	return $data_mysql;

}
function traduzir_data_sistema($data){

	if ($data == "" && $ $data == "0000-00-00" ) {

		return "";
	}

	$dados = explode("-", $data);

	$dataSistema = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $dataSistema;

}