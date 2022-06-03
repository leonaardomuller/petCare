<?php

//recebendo todos os dados do formulario de cadastro pelo metodo POST
$name 			= $_POST["name"];
$contact		= $_POST["contact"];
$street			= $_POST["street"];
$house_number	= $_POST["house_number"];
$district		= $_POST["district"];
$city			= $_POST["city"];

include("config.php");

$insere = mysqli_query($conectou, "INSERT into doador values(null,
 '$name','$contact','$street','$house_number','$district','$city')") or die("Erro ao realizar o cadastro do menu!");
	
	if($insere == 1)
	{
		// echo "<script>alert('Cadastro realizado com sucesso!');</script>";
		echo "<script>window.location = 'cadastro_animal.php'</script>";
	}


mysqli_close($conectou);