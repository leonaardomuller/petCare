<?php 

header("Content-Type: text/html; charset=utf-8",true);

//faz conexao com o servidor MySQL

$local_server = "localhost";
$usuario_server = "root";
$senha_server = "";
$banco_de_dados = "petcare"; //alterar conforme a base que você criou

$conectou = mysqli_connect($local_server,$usuario_server,$senha_server,$banco_de_dados);
//$conectou = true;

if(!$conectou){
	echo "Erro: Falha ao conectar-se com o BD MySQL.";
	exit;
}
	
//echo "Sucesso ao conectar BD MySQL.";
//exit;

?>