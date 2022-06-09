<?php

//recebendo todos os dados do formulario de cadastro pelo metodo POST
$specie			= $_POST["specie"];
$gender		    = $_POST["gender"];
$size		 	= $_POST["size"];
$age		 	= $_POST["age"];
$comments		= $_POST["comments"];
$animal_img		= $_POST["animal_img"];

include("config.php");

if(isset($_FILES['animal_img'])){
	$extensao = strtolower(substr($_FILES['animal_img']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "uploads/";

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