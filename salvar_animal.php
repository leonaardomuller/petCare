<?php

//Recebendo todos os dados do formulario de cadastro pelo metodo POST
$specie				= $_POST["specie"];
$gender		    = $_POST["gender"];
$size		 			= $_POST["size"];
$age		 			= $_POST["age"];
$comments			= $_POST["comments"];
$animal_img		= $_POST["animal_img"];

// Inclui as configuraçōes do banco de dados
include("config.php");

//Se existir um arquivo no input animal_img
if(isset($_FILES['animal_img'])){
	// Captura a extensão do arquivo
	$extensao = pathinfo($_FILES['animal_img']['name'], PATHINFO_EXTENSION);
	// Define um novo nome para o arquivo pegando a data e hora atual e
	// criptografando com md5 adicionando a extensão do arquivo no final.
	$novo_nome = md5(time()) . "." . $extensao;
	// Diretório do upload
	$diretorio = "uploads/";

	// Move o arquivo para o diretório'
	move_uploaded_file($_FILES['animal_img']['tmp_name'], $diretorio.$novo_nome);
}


 $insere = mysqli_query($conectou, "INSERT INTO pets VALUES(null,
  '$specie','$gender','$size','$age','$comments','$novo_nome', NOW())") or die("Erro ao realizar o cadastro do menu!");
	
 	if($insere == 1)
 	{
 		 echo "<script>alert('Cadastro realizado com sucesso!');</script>";
 		 echo "<script>window.location = 'index.php'</script>";
 	} else {
 		echo "<script>alert('Falha ao realizar cadastro!');</script>";
 	}


mysqli_close($conectou);