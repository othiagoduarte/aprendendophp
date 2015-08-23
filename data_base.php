<?php 

$bdServidor = "127.0.0.1";
$bdUsuario = "master";
$bdSenha = "master";
$bdBanco = "tarefas";

$conexao = mysql_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

if (mysql_connect_errno($conexao)) {

	echo "Erro ao conectar a base de dados";
	die();
}


